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

function find_user_by_email($email){
    $sql = "select * from users where email = '$email'";
    $result = query($sql);
    if($result->num_rows > 0){
        return $result->fetch_assoc();
    }
    return null;
}