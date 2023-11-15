<?php 
// echo bin2hex('1');
// echo hex2bin(31);


// shufer tayor end dikripdi yazip chiksam boldi
function Shefer(string $encoding)  {
	$res = 0;
	string : $pow  =  0;
	
	for($i=0; $i < strlen($encoding); $i++) {
		$res .= ord($encoding[$i]) + $pow; 
	}
	// echo $res.'<hr>';
	echo bin2hex($res), "<hr>";
	echo chr(hex2bin(bin2hex($res)));
}


// Shefer("a");
// echo pow(21, 2);

// echo bindec('1100');
// echo decbin(12);


// echo ord('w');

// echo bin2hex('a'), "<hr>";
// echo hex2bin(bin2hex('a'));

function random_string($length) {
	$str = random_bytes($length);
	$str = base64_encode($str);
	$str = str_replace(['/', '*', '='], ' ', $str);
	$str = substr($str, 0, $length);

	return $str;
}

function bite($string) {
	$res = "";
	$l = 5;
	for($i=0; $i<strlen($string); $i++) {
		$res .= bin2hex($string[$i]);
	}

	echo $res;
	var_dump($res);
}

// bite('adftrgrhetrberas?gr/>,.\[{}}[');

?>

<a href="rsa.php">fefw</a>
