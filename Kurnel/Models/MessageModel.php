<?php 



namespace App\Models;
use App\Database\DataBaze;

class MessageModel 
{

	public function __construct(
		private DataBaze $pdo
	)
  {   
    #
  }

  public function select() 
  {
  	
  	// dd($this->pdo->query("SELECT * FROM message"));
  }
}