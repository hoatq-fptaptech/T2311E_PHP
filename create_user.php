<?php 
require_once("functions/user.php");
$full_name = $_POST["full_name"];
$email = $_POST["email"];
$password = $_POST["password"];

$user_info= [
    "full_name"=>$full_name,
    "email"=>$email,
    "password"=>$password,
];

if(create_user($user_info)){
    header("Location: /login.php");
}else{
    echo "Fail";
}
