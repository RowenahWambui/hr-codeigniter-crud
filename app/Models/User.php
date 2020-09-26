<?php
namespace App\Models;

use CodeIgniter\Model;

class User extends Model{
  protected $table = 'users';
  protected $allowedFields = ['fname', 'lname', 'email', 'pass', 'updated_at'];
  protected $beforeInsert = ['beforeInsert'];
  protected $beforeUpdate = ['beforeUpdate'];




  protected function beforeInsert(array $data){
    $data = $this->passwordHash($data);
    $data['data']['created_at'] = date('Y-m-d H:i:s');

    return $data;
  }

  protected function beforeUpdate(array $data){
    $data = $this->passwordHash($data);
    $data['data']['updated_at'] = date('Y-m-d H:i:s');
    return $data;
  }

  protected function passwordHash(array $data){
    if(isset($data['data']['pass']))
      $data['data']['pass'] = password_hash($data['data']['pass'], PASSWORD_DEFAULT);

    return $data;
  }


}