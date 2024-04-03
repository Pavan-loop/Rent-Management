<?php

$name = $_POST['tenantName'];
$phone = $_POST['phonenumber'];
$property = $_POST['propnum'];
$address = $_POST['caddress'];


include 'db_connection.php';
$conn = openCon();

$sql = "INSERT INTO newtenants (name, phone_number, property, address) VALUES (?,?,?,?)";
$stmt = $conn->prepare($sql);

$stmt->bind_param("ssss", $name, $phone, $property, $address);
if($stmt->execute()){
  header("Location: success.html");
}
?>