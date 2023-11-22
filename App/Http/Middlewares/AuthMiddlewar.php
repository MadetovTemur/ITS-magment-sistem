<?php


namespace App\Middlewares;

use App\Middlewares\AbstractMiddlewar;

/**
 *
 */
class AuthMiddlewar extends AbstractMiddlewar
{

	public function handle(array $middlewares = []):void
	{
		echo 'authMiddle';
	}
}
