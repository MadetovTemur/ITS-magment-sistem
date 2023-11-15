<?php 

if (isset($_SESSION['role']) and $_SESSION['role'] == 'admin' and  isset($_POST['subject_name']) and isset($_POST['subject_code']) or isset($_POST['discription']) and isset($_POST['add']) and !isset($_POST['satus'])) {
  
  if (empty($_POST['subject_name']) or empty($_POST['subject_code'])) {
  	echo json_encode(['msg' => 'Ввыдите всё поле']);
  } else {
  	require __DIR__ . '/../php/function.php';
  	require __DIR__ . '/../../connection/connection.php';
  	if(empty($_POST['discription'])){
  		AddNewSubject($conn, $date_tz, $_POST['subject_name'], $_POST['subject_code']);
  	} else {
  		AddNewSubject($conn, $date_tz, $_POST['subject_name'], $_POST['subject_code'], $_POST['discription']);
  	}
  	echo json_encode(['msg' => 'Успешно сахранилсия']);
  }
} 
elseif(isset($_SESSION['role']) and $_SESSION['role'] == 'admin' and  isset($_POST['subject_namer']) or isset($_POST['discriptionr']) and isset($_POST['edit']) and isset($_POST['satus'])) {
  
  require __DIR__ . '/../php/function.php';
  require __DIR__ . '/../../connection/connection.php';
  
  if (empty($_POST['subject_namer'])) {
    echo json_encode(['msg' => 'Ввыдите всё поле']);
  }
  elseif(empty($_POST['discriptionr'])) {
    $params = ['subject_name'=>$_POST['subject_namer'], 
      'discription'=>'NULL', 'status'=> $_POST['satus'], 'data_of_edit'=>$date_tz];
    
    UpdateSubject($conn, $_POST['edit'], $params);
    echo json_encode(['msg' => 'Успешно сахранилсия']);
  }
  else {
    $params = ['subject_name'=>$_POST['subject_namer'], 
      'discription'=>$_POST['discriptionr'], 'status'=> $_POST['satus'], 'data_of_edit'=>$date_tz];
    
    UpdateSubject($conn, $_POST['edit'], $params);
    echo json_encode(['msg' => 'Успешно сахранилсия']);
  }
}
