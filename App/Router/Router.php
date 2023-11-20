<?php

namespace App\Router;

use App\View\View;
use App\Http\Request;
use App\Http\Redirect;
use App\Session\Session;

class Router
{
  private array $routes = [
    'GET' => [],
    'POST' => []
  ];

  public function __construct(
    private View $view,
    private Request $request,
    private Redirect $redirect,
    private Session $session
  )
  {
    $this->initRoutes();
  }

  public function dispatch(string $uri, string $method):void
  {
    $uri = strtok($uri, '?');
    $route = $this->findRoute($uri, $method);

    if(! $route) {
      $this->notFound();
    }

    if(is_array($route->getAction()) ) {
      [$controller, $action] = $route->getAction();
      
      $controller = new $controller();

      
      call_user_func([$controller,'setView'], $this->view);
      call_user_func([$controller,'setRequest'], $this->request);
      call_user_func([$controller,'setRedirect'], $this->redirect);
      call_user_func([$controller,'setSession'], $this->session);

      call_user_func([$controller, $action]);
      
    } else {
      call_user_func($route->getAction());
    }

  }

  private function notFound()
  {
    echo "not found";
    exit;
  }

  private function findRoute($uri, $method) :Route|false
  {
    if(!isset($this->routes[$method][$uri])) {
      return false;
    }
    return $this->routes[$method][$uri];
  }

  private function initRoutes()
  {
    $routes = $this->getRoutes();
    foreach($routes as $route) {
      $this->routes[$route->getMethod()][$route->getUri()] = $route;
    }
  }

  private function getRoutes() :array
  {
    return require_once APP_PATH . '/routes/web.php';
  }

  


}
