<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Validator\Validator;

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
      
      // dd($_SESSION);
      $this->redirect('/login');
    } 
    else {
      
    }
  }
}
