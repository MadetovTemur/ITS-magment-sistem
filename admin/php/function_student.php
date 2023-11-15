<?php

function InsertStudent($conn_db, $param) {
    $i = 0;
    $coll = '';
    $mask = '';
  
    foreach($param as $key => $value) {
      if($i == 0) {
        $coll = $coll . $key;
        $mask = $mask . '"' . $value . '"';
        $i++;
      }else {
        $coll = $coll . ", " . $key;
        $mask = $mask. ', "' . $value . '"';
      }
    }
    
    $sql = "INSERT INTO students ({$coll}) VALUES ({$mask})";
    return $sql;
    $db = $conn_db->prepare($sql);
    $db->execute(); 
    return $db;
}


