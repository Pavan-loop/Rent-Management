<?php
function openCon()
{
$dbhost = "localhost:3307";
$dbuser = "root";
$dbpass = "";
$dbname = "rental";
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if($conn -> connect_error){
  trigger_error("Connection error: " . $conn->connect_error);
}
return $conn;
}
function Closecon($conn)
{
  $conn -> close();
}
?> 