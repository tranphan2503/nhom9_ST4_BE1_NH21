<?php
require "config.php";
require "models/db.php";
require "models/manufacture.php";
$manufacture = new Manufacture;
//xu li them
if(isset($_POST['submit'])){
    $manu_name = $_POST['manu_name'];
    $manu_id = $_POST['hidden_id'];
    $manufacture->editManu($manu_name,$manu_id);
}
header('location:manufactures.php');