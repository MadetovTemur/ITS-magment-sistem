<?php 


function SaerchUsernameAll($conn_db, $username) {
    $uname = htmlspecialchars($username);
  
    for ($i=1; $i <= 3; $i++):
      
      if ($i == 1)  $sql = "SELECT * FROM admins WHERE username = ?";
      elseif($i == 2)  $sql = "SELECT * FROM teachers WHERE username = ?";
      elseif($i == 3) $sql = "SELECT * FROM students WHERE username = ?";
      
      $db = $conn_db->prepare($sql);
      $db->execute([$uname]);	
      if($db->rowCount() >= 1) {
        return false;
      }
    endfor;
    return true;
}




function AddNewTeacher($conn_db, $param) {
  $i = 0;
  $coll = '';
  $mask = '';

  foreach($param as $key => $value) {
    if($i == 0) {
      $coll = $coll.$key;
      $mask = $mask."'".$value."'";
      $i++;
    }else {
      $coll = $coll. ", ".$key;
      $mask = $mask. ", '".$value. "'";
    }
  }
  $sql = "INSERT INTO teachers ({$coll}) VALUES ({$mask})";
  $db = $conn_db->prepare($sql);
  $db->execute(); 
  return $db;
}



function AllTeacher($conn_db, $status, $limite, $offsete) {

  $sql = "SELECT teacher_id, full_name, subjects FROM teachers WHERE status = {$status} LIMIT $limite OFFSET $offsete";
  $stmt = $conn_db->prepare($sql);
  $stmt->execute();

  if ($stmt->rowCount() >= 1) {
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  } else {
    return 0;
  }

}


function GetAllTeacher($conn_db) {
  $sql = "SELECT teacher_id, full_name, subjects FROM teachers WHERE status=0  ORDER BY `full_name` ASC";
  
  $stmt = $conn_db->prepare($sql);
  $stmt->execute();

  if ($stmt->rowCount() >= 1) {
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  } else {
    return 0;
  }
}


function GetByIdTeacher($conn_db, $id){
  $coll = "teacher_id, username, status, full_name, pasport_code, jender, 
    phone_number, date_of_birth, date_of_joined, subjects, address";
  $sql = "SELECT {$coll} FROM teachers WHERE teacher_id = {$id}";
 
      
  $db = $conn_db->prepare($sql);
  $db->execute(); 
  if($db->rowCount() >= 1) {
    return $db->fetch(PDO::FETCH_ASSOC);;
  } else {
    return 0;
  }
}


function ChekSubjectTeacher($sub_code = NULL, $array = NULL){
  $array = explode(',', $array);

  foreach($array as $value) {
    if($sub_code == $value) {
      return 'checked';
      exit();
    }
  }
}



function UpdateTeacher($conn_db, $id, $col_val) {
  $i = 0;
  $str = '';

  foreach($col_val as $key => $value) {
    if($i === 0) {
      // $str = $str . $key . " = '". $value . "' ";
      $str .= "{$key}='{$value}'";
     $i++;
    } else {
      // $str = $str.", ".$key." ='".$value."' ";
      $str .= ", {$key}='{$value}'";
    }
  }

  $sql = "UPDATE teachers SET {$str} WHERE teacher_id = {$id} ";
  $db = $conn_db->prepare($sql);
  $db->execute(); 
}



function GetTeacherGroups($conn_db, $teacher_id) {
  $sql = "SELECT group_code, group_jurnal FROM groups WHERE group_teacher={$teacher_id};";

  $db = $conn_db->prepare($sql);
  $db->execute(); 
  if($db->rowCount() >= 1) {
    return $db->fetchAll(PDO::FETCH_ASSOC);;
  } else {
    return 0;
  }
}



function EchoTeacherGroups($conn_db, $teacher_id) {
  $response = GetTeacherGroups($conn_db, $teacher_id);
  if($response != 0){
    $r = "";
    foreach($response as $res) {
      $r .= "<a href='{$res['group_jurnal']}'>". strtoupper($res['group_code']) . "</a>  ";
    }
    return $r;
  } else {
    return 'Группа не найден';
  }
}