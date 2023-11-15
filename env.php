<?php 


class Env {


    function __construct(string $file_path)
    {
    	// fopen($file_path, $mode='r');
      $this->env_file = file($file_path, FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES);
      
      
      // $buffer = fread($file, filesize($file_path));
    	
    	// $buffer = fgets($file);
    }

    private function ignoreComments(array $array) : array {
    	
    	$response = array();
    	
    	foreach($array as $row) {		
    		if($row[0] != '#') $response[] = $row;
    	}
    	return $response;
    }

    private function soltToArray(array $array) {
    	$response = array();

    	for ($i=0; $i < count($array); $i++) { 
    		$g = explode('=', $array[$i]);

    		$response[$g[0]] = $g[1];
    		for ($d=0; $d < strlen($g[1]); $d++) { 
    			if ($g[1][$d] == '[' or ) {
    				
    			}
    		}
    	}

    	print_r($response['ELLL'][0]);
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


