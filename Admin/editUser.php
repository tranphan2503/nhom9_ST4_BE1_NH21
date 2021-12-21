<?php
require "config.php";
require "models/db.php";
require "models/protype.php";
$protype = new Protype;
//xu li them
if(isset($_POST['submit'])){
    $type_name = $_POST['type_name'];
    $type_id = $_POST['hidden_id'];
    $protype->editProtype($type_name,$type_id);
}
header('location:users.php');