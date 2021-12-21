<?php
require "config.php";
require "models/db.php";
require "models/user.php";
$user = new User;
//xu li them
if(isset($_GET['user_id'])){
    $user->delUser($_GET['user_id']);
}
header('location:users.php');