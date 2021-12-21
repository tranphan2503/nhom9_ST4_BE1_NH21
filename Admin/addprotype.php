<?php
require "config.php";
require "models/db.php";
require "models/protype.php";
$protype = new Protype;
//xu li them
if(isset($_POST['submit'])){
    $type_name = $_POST['type_name'];
    
    $protype->addprotype($type_name);
    
}
header('location:protypes.php');