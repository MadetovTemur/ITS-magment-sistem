<?php 


function evd(array $d,$e=0):void {
  echo "<pre>";
  if($e == 0) print_r($d);
  elseif($e == 1) var_dump($d);
  echo "</pre>";
}


class Env {


    function __construct(string $file_path)
    {
    	// fopen($file_path, $mode='r');
      $this->env_file = file($file_path, FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES);
      
      
      // $buffer = fread($file, filesize($file_path));
    	
    	// $buffer = fgets($file);
    }

    private function ignoreComments(array $array) : array 
    {
      /* 
        comment #
      */
    	
    	$response = array();
    	
    	foreach($array as $row) {		
    		if($row[0] != '#') $response[] = $row;
    	}
    	return $response;
    }

    private function soltToList($value) {
      echo "list";
    }

    private function serchList(array $array) {
      foreach($array as $rs) {
        
        for ($s=0; $s < strlen($r); $s++) { 
          if()
        }
      }
    }


    private function soltToArray(array $array) {
    	$response = array();

    	for ($i=0; $i < count($array); $i++) { 
    		$g = explode('=', $array[$i]);

    		// $response[$g[0]] = $g[1];

        if ($g[1][0] == '[' and false) {
          $this->soltToList($g);
        }else {
          $response[$g[0]] = $g[1];
        }
    		
    	}
      evd($response, 1);
    	
    }


    function read()
    {
    	
    	$s = $this->ignoreComments($this->env_file);
    	$g = $this->soltToArray($s);
      // var_dump();
    } 



    
    function __destruct() {
    	// fclose($this->env_file);
    }
}






$env = new Env(".env");
$env->read();


