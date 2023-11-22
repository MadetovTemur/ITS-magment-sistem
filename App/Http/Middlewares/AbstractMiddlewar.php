<?php

namespace App\Middlewares;



use App\Http\Request;
use App\Http\Redirect;
use App\Auth\Auth;



abstract class AbstractMiddlewar
{

	public function __construct(
    protected Request $request,
    protected Redirect $redirect,
    protected Auth $auth
  )
  {
    #
  }

  abstract public function handle():void ;
}
