<?php


namespace App;


use App\Container;

class App
{
  private Container $contaner;

  public function __construct()
  {
    $this->contaner = new Container();
  }

  public function run()
  {
    $this->contaner->router->dispatch(
      $this->contaner->request->uri(), 
      $this->contaner->request->method()
    );

  }
}
