<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class UserController extends BaseController{

    public function index(){

       
        return view('homepage');

    }
    public function login(){
        helper('form');
        $data = [];


		if ($this->request->getMethod() == 'post') {
			//let's do the validation here
			$rules = [
				'email' => 'required|min_length[6]|max_length[50]|valid_email',
				'pass' => 'required|min_length[8]|max_length[255]|validateUser[email,pass]',
			];

			$errors = [
				'pass' => [
					'validateUser' => 'Email or Password don\'t match'
				]
			];

			if (! $this->validate($rules, $errors)) {
				$data['validation'] = $this->validator;
			}else{
				$model = new User();

				$user = $model->where('email', $this->request->getVar('email'))
							  ->first();

				$this->setUserSession($user);
                return $this->response->redirect(site_url('/employees'));

			}
		}

		return view('login', $data);
    }

    private function setUserSession($user){
		$data = [
			'id' => $user['id'],
			'fname' => $user['fname'],
			'lname' => $user['lname'],
			'email' => $user['email'],
			'isLoggedIn' => true,
		];

		session()->set($data);
		return true;
	}
	public function logout() {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('isLoggedIn');
        redirect(base_url('login'));
    }

    public function register(){
        $data = [];
        helper('form');

        if($this->request->getMethod() == 'post'){
            $rules = [
				'fname' => 'required|min_length[3]|max_length[20]',
				'lname' => 'required|min_length[3]|max_length[20]',
				'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
				'pass' => 'required|min_length[8]|max_length[255]',
				'confirmPass' => 'matches[pass]',
            ];
            if (! $this->validate($rules)) {
				$data['validation'] = $this->validator;
			}else{
				$model = new User();

				$newData = [
					'fname' => $this->request->getVar('fname'),
					'lname' => $this->request->getVar('lname'),
					'email' => $this->request->getVar('email'),
					'pass' => $this->request->getVar('pass'),
				];
				$model->insert($newData);
				$session = session();
				$session->setFlashdata('success', 'Successful Registration');
                return $this->response->redirect(site_url('/login'));

			}
        }
       
        return view('register',$data);

	}
}
