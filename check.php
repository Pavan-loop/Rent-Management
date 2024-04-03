<?php
include 'db_connection.php';
$conn = opencon();
if($conn){
  echo "connection sucessfull";
}
Closecon($conn);
?>