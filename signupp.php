<?php
include 'db_connection.php';
$conn = openCon();

$email = $_POST['email'];
$pass = $_POST['password'];
$repass = $_POST['repassword'];

$insert = "INSERT INTO users (user_name, password) values (?, ?)";
$stmt = $conn->prepare($insert);
$stmt->bind_param("ss",$email,$pass);
if($pass == $repass){
  if($stmt->execute()){
    header('Location: index.html');
  }
}else{
  header('Location: signup.html');
}



?>