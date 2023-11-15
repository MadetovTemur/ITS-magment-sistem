<?php 

$sort_az = "ORDER BY group_subject ASC";

function EchoGroupStudents($conn_db) {
  global $sort_az;
	$sql = "SELECT group_subject, group_code, group_id  FROM groups WHERE status=0  ". $sort_az;
  $stmt = $conn_db->prepare($sql);
  $stmt->execute();

  if ($stmt->rowCount() >= 1) {
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  } else {
   	return 0;
  }
}

function Allgroups($conn_db, $colum_name, $status, $limite, $offsete) {
  global $sort_az;
  $i = 0;
  $str = '';
  foreach($colum_name as $value):
    if($i === 0) {
      $str .= $value;
      $i++;
    } else {
      $str .= ", ". $value;
    }

  endforeach;

  $sql = "SELECT {$str} FROM groups WHERE status = {$status} {$sort_az} LIMIT $limite OFFSET $offsete" ;
  $query = $conn_db->prepare($sql);
  $query->execute();


  if ($query->rowCount() >= 1) {
    return $query->fetchAll(PDO::FETCH_ASSOC);
  } else {
    return 0;
  }
}