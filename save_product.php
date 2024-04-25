<?php 
// received data from FORM
$name = $_POST["name"];
$price = $_POST["price"];
$qty = $_POST["qty"];
$description = $_POST["description"];
// code save to db
$host = "localhost";
$user = "root";
$pass = "root";
$db = "t2311e_php";

$conn = new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
  die("Connect database failed");
}
$sql = "INSERT INTO products(name,price,qty,description) 
                VALUES('$name',$price,$qty,'$description')";
$conn->query($sql);
header("Location: /demo3.php");