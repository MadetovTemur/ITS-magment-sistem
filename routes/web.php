<?php

// import
use App\Router\Route;
use App\Kurnel\Controllers\MainController;
use App\Kurnel\Controllers\AdminController;

use App\Middlewares\AuthMiddlewar;

return [
  // test  /singup
  Route::get('/test', function () {  echo "Test functoion is private";  }),

  Route::get('/', [MainController::class, 'index'], 'index'),
  Route::get('/login', [MainController::class, 'login']),
  Route::post('/singup', [MainController::class, 'singup']),

  Route::get('/admin/', [AdminController::class, 'index'], "grt", $middlewar=[AuthMiddlewar::class]),
];
