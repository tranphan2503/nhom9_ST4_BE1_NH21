<?php
require "config.php";
require "models/db.php";
require "models/user.php";
$user = new User;
//xu li them
if(isset($_POST['submit'])){
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $user_id = $_POST['hidden_id'];
    $user->editUser($user_name,$password,$user_id);
}
header('location:users.php');