<?php

// import
use App\Router\Route;
use App\Controllers\MainController;
// use App\Controllers\LoginController;

return [
  // test  /singup
  Route::get('/test', function () {  echo "Test functoion is private";  }),

  Route::get('/', [MainController::class, 'index'], 'index'),
  Route::get('/login', [MainController::class, 'login']),
  Route::post('/singup', [MainController::class, 'singup']),

  
];
