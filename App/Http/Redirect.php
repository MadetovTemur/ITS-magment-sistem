<?php 


namespace App\Http;

class Redirect
{
	public function to(string $pathUri):void
	{
		header("Location: ".$pathUri);
		exit;
	}
}