<?php
include 'db_connection.php';
$conn = opencon();

$username = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE user_name = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss",$username,$password);
$stmt->execute();

$result = $stmt->get_result();

if($result->num_rows == 1){
  header("Location: admin.php");
  exit();
}else{
  echo "<script> alert(Invalid user); </script>";
}

?>