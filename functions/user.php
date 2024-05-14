<?php 
require_once("database.php");

function create_user($user_info){
    $full_name = $user_info["full_name"];
    $email = $user_info["email"];
    $password = $user_info["password"];
    // hash password
    $password = password_hash($password,PASSWORD_BCRYPT);
    $sql = "insert into users(full_name,email,password) values('$full_name','$email'
                ,'$password')";
    query($sql);
    return true;            
}