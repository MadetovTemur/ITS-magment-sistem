<?php 

namespace App\Controllers;

use App\View\View;
use App\Http\Request;
use App\Session\Session;
use App\Http\Redirect;

abstract class Controller 
{
  private View $view;
  private Request $request;
  private Redirect $redirect;
  private Session $session;

  

  public function view(string $name)
  {
    $this->view->page($name);
  }

  public function setView(View $view)
  {
    $this->view = $view;
  }

  public function request():Request
  {
    return $this->request;
  }
  
  public function setRequest(Request $request):void
  {
    $this->request = $request;
  }

  public function setRedirect(Redirect $redirect):void
  {
    $this->redirect = $redirect;
  }
  public function redirect(string $uri):void
  {
    $this->redirect->to($uri);
  }


  public function session():Session
  {
    return $this->session;
  }
  
  public function setSession(Session $session):void
  {
    $this->session = $session;
  }


}