<?php
require "config.php";
require "models/db.php";
require "models/user.php";
$user = new User;
//xu li them
if(isset($_POST['submit'])){
    $user_name = $_POST['username'];
    $password = $_POST['password'];
    $user->addUser($user_name,$password);
    
}
header('location:users.php');