<?php


namespace App;

use App\Http\Request;
use App\Http\Redirect;
use App\Router\Router;
use App\View\View;
use App\Validator\Validator;
use App\Session\Session;


class Container
{
  public readonly Request $request;
  public readonly Router $router;
  public readonly View $view;
  public readonly Validator $validator;
  public readonly Redirect $redirect;
  public readonly Session $session;


  public function __construct()
  {
    $this->registerServices();
  }


  public function registerServices()
  {
    $this->request = Request::createFromGlobals();
    $this->session = new Session();
    $this->redirect = new Redirect();
    $this->view = new View($this->session);
    $this->validator = new Validator();
    $this->request->setValidator($this->validator);
    
    $this->router = new Router($this->view, $this->request, $this->redirect, $this->session);
  }

  
}
