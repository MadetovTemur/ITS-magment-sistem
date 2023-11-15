<?php


date_default_timezone_set('Asia/Tashkent');

$sName = "localhost";
$uName = "root";
$pass  = "";
$db_name = "its";





$db_name_2 = "its_jurnal";

try {
	$conn = new PDO("mysql:host=$sName;dbname=$db_name", $uName, $pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	// $conn2 = new PDO("mysql:host=$sName;dbname=$db_name_2", $uName, $pass);
	// $conn2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOExeption $e){ //!  type: ignore
	
	echo "Connection failed: ". $e->getMessage();
	exit;
}







$date_tz = date("Y-m-d H:i:s");
