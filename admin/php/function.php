<?php

require __DIR__ . '/function_group.php';
require __DIR__ . '/function_subject.php';
require __DIR__ . '/function_teacher.php';
require __DIR__ . '/function_student.php';



$limit = isset($_GET['m']) ? $_GET['m'] : 20; 

function PageArray($array) {
	$res = array();
	foreach($array as $ar) {
		$res = $array;
	}
	return $res;
}

function ArrayToString($array) {
	$str = "";
	foreach($array as $a) {
		$str .= $a;
	}
	return $str;
}



function dd($d = NULL, $e=0):void {
	echo "<pre>";
  if($e == 0) print_r($d);
  elseif($e == 1) var_dump($d);
  echo "</pre>";
}


function EchoStatus($status, $message) {
	if($status == '0') {
		return $message['on'];
	}elseif ($status == '1') {
		return $message['off'];
	}
}


function EchoDiscription($status, array $message) {
	if(!empty($status) or $status != "0" ) {
		return $message['on'];
	} else {
		return $message['off'];
	}
}



function EchoToString($string, $s=0) :string {
	$str = explode(' ', $string);

	return $str[$s];
}


function DeliteArrayRow(array $array, string $row_key) :array {
	$res = array();

	foreach($array as $key => $value) {
		if($key != $row_key) {
			$res[$key] = $value;	
		}
		
	}
	return $res;
}


function assets(string $path = '/'):string|NULL {
	$url = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].$path;
	return $url;
}


function validate(string $str):bool {

	if(strlen($str) > 0){
		return true;
	} else {
		return false;
	}
}