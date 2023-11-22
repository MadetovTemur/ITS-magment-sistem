<?php 


namespace App\Auth;

interface AuthInterface
{

	public function attempt(string $username, string $password):bool;

	public function logout():void; 

	public function check():bool;
}