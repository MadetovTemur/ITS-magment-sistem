<?php


namespace App\Router;


class Route
{

  public function __construct(
    private string $uri,
    private string $method,
    private $action,
    private $name,
    private array $middlewar = []
  )
  {
    #
  }

  public static function get(string $uri, $action, string $name=null, array $middlewar = []) :static
  {
    return new static($uri, 'GET', $action, $name, $middlewar);
  }

  public static function post(string $uri, $action, string $name=null, array $middlewar = []) :static
  {
    return new static($uri, 'POST', $action, $name, $middlewar);
  }

  public static function name(string $names)
  {
    // dd($names);
    // new static($names);
    // $this->name = $names;
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

  public function getMiddlewar(): array
  {
    return $this->middlewar;
  }

  public function hasMiddlewar(): bool
  {
    return ! empty($this->middlewar);
  }
}
