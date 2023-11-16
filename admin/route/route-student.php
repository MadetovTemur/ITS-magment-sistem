<?php 
  require __DIR__ . '/../php/function.php';



if(isset($_POST['full_name']) and isset($_POST['telephone']) 
  and isset($_POST['username']) and isset($_POST['address']) 
  and isset($_POST['gender']) and isset($_POST['password'])
  and isset($_POST['date_of_birth']) ){

  require __DIR__ . '/../../connection/connection.php';
  


  if(empty($_POST['full_name'])){
    echo json_encode(['msg' => 'Ввыдите Ф.И!']);
  } 
  elseif (empty($_POST['telephone'])) {
    echo json_encode(['msg' => 'Ввыдите телефон номер!']);
  } 
  elseif ( empty($_POST['username'])) {
    echo json_encode(['msg' => 'Ввыдите имя пользовател !']);
  }
  elseif (empty($_POST['address'])) {
    echo json_encode(['msg' => 'Ввыдите адрес!']);
  } 
  elseif (empty($_POST['password'])) {
    echo json_encode(['msg' => 'Ввыдите пароль!']);
  } 
  elseif (empty($_POST['date_of_birth'])) {
    echo json_encode(['msg' => 'Ввыдите день рождения!']);
  }
  elseif (empty($_POST['gender'])) {
    echo json_encode(['msg' => 'Ввыдите пол!']);
  } else {
    // valite($_POST)
      if(empty($_POST['pasport_code'])) {
        $paramet = [
        'full_name'=> $_POST['full_name'],
        'username' => $_POST['username'],
        'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
        'address' => $_POST['address'],
        'date_of_birth' => $_POST['date_of_birth'],
        'jender' => $_POST['gender'],
        'phone_number' => $_POST['telephone'],
        'date_of_joined' => $date_tz
        // 'subjects'=> ArrayToString($_POST['groups'])
      ];dd(InsertStudent($conn, $paramet));
       dd($_POST, 1);
      }
      

  
      
  }






}
// dd($_POST);  