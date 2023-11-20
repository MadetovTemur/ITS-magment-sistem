<?php


namespace App\Router;


class Route
{

  public function __construct(
    private string $uri,
    private string $method,
    private $action,
    private $name
  )
  {
    #
  }

  public static function get(string $uri, $action, string $name=null) :static
  {
    return new static($uri, 'GET', $action, $name);
  }

  public static function post(string $uri, $action, string $name=null) :static
  {
    return new static($uri, 'POST', $action, $name);
  }

  public function getUri() :string
  {
    
    return $this->uri;
  }
  public function getMethod() :string
  {
    return $this->method;
  }

  public function getAction() :mixed
  {
    return $this->action;
  }

  public function routeName() :string
  {
    return $this->name;
  }
}
