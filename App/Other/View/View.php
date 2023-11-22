<?php 


namespace App\View;

// use App\Container;

use App\Session\Session;
use App\Auth\Auth;

class View 
{

  public function __construct(
    private Session $session,
    private Auth $auth
  ){
    #
  }
  

  public function page(string $name):mixed
  {
    $viewPage = APP_PATH . "/resources/views/".$name.".php";
    
    if(!file_exists($viewPage)){
      throw new \Exception("View $name Not Found");
    } else {

      extract([ 
            'view'=>$this,
            'auth'=>$this->auth,
            'session' =>$this->session,
          ]);
      return include_once $viewPage;
    }
    
  }

  public function layout(string $name, $title=null):mixed
  {
    $viewPage = APP_PATH . "/resources/layout/".$name.".php";
    if(!file_exists($viewPage)){
      echo "<h1>Component $name not found</h1> <br>";
      return null;
    }
    extract([ 
      'title_page'=>$title
    ]);
    return include_once $viewPage;
  }

  public function assets(string $name):mixed
  {
    // $uri = $this->containerView->request->webUri();
    
    $viewPage = "http://localhost". "/resources/public/".$name;


    if(!file_exists(APP_PATH."/resources/public/".$name)){
      echo "Component $name not found !";
      return null;
    }
    return $viewPage;
  }


}