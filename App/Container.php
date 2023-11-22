<?php


namespace App;

use App\Config\Config;
use App\Http\Request;
use App\Http\Redirect;
use App\Router\Router;
use App\View\View;
use App\Validator\Validator;
use App\Session\Session;
use App\Database\DataBaze;
use App\Auth\Auth;



class Container
{
  public readonly Request $request;
  public readonly Router $router;
  public readonly View $view;
  public readonly Validator $validator;
  public readonly Redirect $redirect;
  public readonly Session $session;
  public readonly DataBaze $database;
  public readonly Config $config;
  public readonly Auth $auth;


  public function __construct()
  {
    $this->registerServices();
  }


  public function registerServices()
  {


    $this->config = new Config();
    $this->database = new DataBaze();

    $this->request = Request::createFromGlobals();
    $this->session = new Session();

    $this->redirect = new Redirect();

    $this->validator = new Validator();

    $this->request->setValidator($this->validator);

    $this->auth = new Auth($this->database, $this->session);

    $this->view = new View($this->session, $this->auth);

    $this->router = new Router($this->view,
                              $this->request,
                              $this->redirect,
                              $this->session,
                              $this->database,
                              $this->auth );
  }


}
