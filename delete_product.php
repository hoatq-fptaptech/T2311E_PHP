<?php 
$id = $_GET["id"];

// code save to db
$host = "localhost";
$user = "root";
$pass = "root";
$db = "t2311e_php";

$conn = new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
  die("Connect database failed");
}
$sql = "DELETE FROM products WHERE id = $id";
$conn->query($sql);
header("Location: /demo3.php");