<?php
require "config.php";
require "models/db.php";
require "models/manufacture.php";
$manufacture = new Manufacture;
//xu li them
if(isset($_GET['manu_id'])){
    $manufacture->delManufacture($_GET['manu_id']);
}
header('location:manufactures.php');