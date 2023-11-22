<?php

namespace App\Http\Controllers;

use App\View\View;
use App\Http\Request;
use App\Session\Session;
use App\Http\Redirect;
use App\Database\DataBaze;
use App\Auth\Auth;

abstract class Controller
{
  private View $view;
  private Request $request;
  private Redirect $redirect;
  private Session $session;
  private DataBaze $datab;
  private Auth $auths;


  public function view(string $name)
  {
    $this->view->page($name);
  }

  public function request():Request
  {
    return $this->request;
  }

  public function redirect(string $uri):void
  {
    $this->redirect->to($uri);
  }

  public function auth():Auth
  {
    return $this->auths;
  }

  public function session():Session
  {
    return $this->session;
  }

  public function db(): DataBaze
  {
    return $this->datab;
  }


  // Seter function

  public function setView(View $view)
  {
    $this->view = $view;
  }

  public function setDatabase(DataBaze $deb):void
  {
    $this->datab = $deb;
  }

  public function setSession(Session $session):void
  {
    $this->session = $session;
  }

  public function setAuth(Auth $atuh)
  {
    $this->auths = $atuh;
  }

  public function setRequest(Request $request):void
  {
    $this->request = $request;
  }

  public function setRedirect(Redirect $redirect):void
  {
    $this->redirect = $redirect;
  }

}
