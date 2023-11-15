<?php 


function AddNewMessage($conn_db, $f, $e, $m, $d) {
  $sql = "INSERT INTO message (full_name, email, message, date_of_joined) VALUES ('{$f}', '{$e}', '{$m}', '{$d}')";
  
  $stmt = $conn_db->prepare($sql);
  $stmt->execute();
}




if(isset($_POST['email']) and isset($_POST['full_name']) and isset($_POST['message'])) {

	if(empty($_POST['email'])) {
		echo json_encode(['msg' => 'Видите почта']);
	}elseif (empty($_POST['full_name']) ) {
		echo json_encode(['msg' => 'Видите Имя']);
	}elseif (empty($_POST['message']) ) {
		echo json_encode(['msg' => 'Видите сообшения']);
	} else {
		include __DIR__ .'/../connection/connection.php';
		
		$email = htmlspecialchars($_POST['email']);
		$full_name = htmlspecialchars($_POST['full_name']);
		$msg = htmlspecialchars($_POST['message']);

		AddNewMessage($conn, $full_name, $email, $msg, $date_tz);


		echo json_encode(['msg' => 'Запрос получили спасиба']);
	}
}