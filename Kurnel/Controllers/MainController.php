<?php

namespace App\Kurnel\Controllers;

use App\http\Controllers\Controller;


class MainController extends Controller
{

  public function index():void
  {
    $this->view('index');
  }

  public function login():void
  {
    $this->view('login');
  }

  public function singup():void
  {

    $validator = $this->request()->validator([
      'username'=> ['required', 'min:5', 'max:20'],
      'password'=> ['required', 'min:5', 'max:24']
    ]);

    if(! $validator) {
      foreach($this->request()->errors() as $field => $error){
        $this->session()->set($field, $error);
      }

      $this->redirect('/login');
    }
    else {
      // password_hash(, PASSWORD_DEFAULT)

      $username = $this->request()->input('username');
      $password = $this->request()->input('password');
      // dd($this->db());
      $data = $this->db()->query("SELECT * FROM admins WHERE username='{$username}' ");

      // dd($data, $this->request()->post, password_hash($this->request()->input('password'), PASSWORD_DEFAULT));
      if($data['username'] === $username and password_verify($password, $data['password'])){

        $key = array_keys($data);

        $this->session()->set('id', $data[$key[0]]);
        $this->session()->set('full_name', $data[$key[1]]);
        $this->session()->set('role', $data[$key[2]]);

        $this->view('admin/admin');
      }
      else {
        $this->view('login');
      }


    }
  }
}
