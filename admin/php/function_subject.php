<?php 


function AllSubjects($conn_db, $status, $limite = 10, $offsete) {

	$sql = "SELECT * FROM subjects WHERE status = {$status} ORDER BY `subjects`.`subject_name` ASC LIMIT $limite OFFSET $offsete ";
	// $sql = 'SELECT * FROM `subjects` ORDER BY `subject` ASC';
  $stmt = $conn_db->prepare($sql);
  $stmt->execute();

  if ($stmt->rowCount() >= 1) {
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  } else {
   	return 0;
  }
}

function CountRows($conn_db, $status, $table = 'subjects'){
  $sql = "SELECT COUNT(*) FROM {$table} WHERE status = {$status}";
  $query = $conn_db->prepare($sql);
  $query->execute();

  return $query->fetch()[0];
}


function AddNewSubject($conn_db, $date, $sub_name, $sub_code, $dis='0') {
  $sql = "INSERT INTO subjects (subject_name, subject_code, discription, date_of_joined) VALUES (?, ?, ?, ?)";
  $stmt = $conn_db->prepare($sql);
  $stmt->execute([$sub_name, $sub_code, $dis, $date]);
}

function GetSubjectId($conn_db, $subject_id) {
  $sql = "SELECT * FROM subjects WHERE subject_id = ?" ;
  $stmt = $conn_db->prepare($sql);
  $stmt->execute([$subject_id]);

  if ($stmt->rowCount() >= 1) {
    return $stmt->fetch(PDO::FETCH_ASSOC);
  } else {
    return 0;
  }
}


function UpdateSubject($conn_db, $id, $param) {
  $i = 0;
  $str = '';
  foreach($param as $key => $value):
    if($i === 0) {
      $str = $str . $key."='".$value."'";
      $i++;
    }else{
      $str = $str.', '.$key."='".$value."'";
    }

  endforeach;

  $sql = "UPDATE subjects SET $str WHERE subject_id=$id";
  $query = $conn_db->prepare($sql);
  $query->execute();
}


function DelateSubject($conn_db, $subject_id) {
  $sql = "DELETE FROM `subjects` WHERE subject_id = {$subject_id}";
  $stmt = $conn_db->prepare($sql);
  $stmt->execute();
}



function EchoSubjectsCode($conn_db) {
  $sql = "SELECT subject_name, subject_code, discription FROM subjects WHERE status=0  ORDER BY `subject_name` ASC";
  $stmt = $conn_db->prepare($sql);
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}