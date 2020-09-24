<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Employee;

class EmployeesController extends BaseController{

    public function index(){

        $employeeModel = new Employee();
        $data ['employees'] = $employeeModel->findAll();
        return view('employees/index', $data);

    }
    public function create(){

        return view('employees/create');

    }
    public function save(){

        $employeeModel = new Employee();
        $data = [
            'Name' =>$this->request->getVar('fullName'),
            'Email' =>$this->request->getVar('emailAddress'),
            'Tel_Number' =>$this->request->getVar('telNumber'),
            'Residence' =>$this->request->getVar('residence')
        ];
        $employeeModel ->insert($data);
        return $this->response->redirect(site_url('/employees'));

    }
    public function edit($id = null){

        $employeeModel = new Employee();
        $data['employee_data'] = $employeeModel->where('id', $id)->first();
        return view('employees/edit', $data);

    }
    public function update(){

        $employeeModel = new Employee();

        $id = $this->request->getVar('id');
        $data = [
            'Name' => $this->request->getVar('fullName'),
            'Email' => $this->request->getVar('emailAddress'),
            'Tel_Number'=> $this->request->getVar('telNumber'),
            'Residence' => $this->request->getVar('residence')
        ];
        $employeeModel ->update($id, $data);

        return $this->response->redirect(site_url('/employees'));

    }
    
    public function delete($id){
        $employeeModel = new Employee();

        $employeeModel->delete($id);
        return $this->response->redirect(site_url('/employees'));

    }
}