<?php
class Product extends Db
{
public function getNewProducts()
{
$sql = self::$connection->prepare("SELECT * FROM `products` ORDER BY `created_at` DESC LIMIT 0,10");
$sql->execute();
$items = array();
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; //return an array
}

public function getAllProducts()
{
$sql = self::$connection->prepare("SELECT * FROM `products`");
$sql->execute();
$items = array();
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; //return an array
}

public function getProductsLaptop()
{
$sql = self::$connection->prepare("SELECT * FROM `products` WHERE `type_id`=2");
$sql->execute();
$items = array();
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; //return an array
}
public function getProductsSmartPhones()
{
$sql = self::$connection->prepare("SELECT * FROM `products` WHERE `type_id`=1");
$sql->execute();
$items = array();
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; //return an array
}
public function getProductsMayin()
{
$sql = self::$connection->prepare("SELECT * FROM `products` WHERE `type_id`=5");
$sql->execute();
$items = array();
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; //return an array
}
public function getProductsTablet()
{
$sql = self::$connection->prepare("SELECT * FROM `products` WHERE `type_id`=3");
$sql->execute();
$items = array();
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; //return an array
}
public function getProductsDongho()
{
$sql = self::$connection->prepare("SELECT * FROM `products` WHERE `type_id`=4");
$sql->execute();
$items = array();
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; //return an array
}
public function getManuName()
{
$sql = self::$connection->prepare("SELECT products.*,manu_name FROM `products`,`manufactures` WHERE `products`.`manu_id`=`manufactures`.`manu_id`");
$sql->execute();
$items = array();
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; //return an array
}
public function getProductById($id)
{
$sql = self::$connection->prepare("SELECT * FROM products WHERE id = ?");
$sql->bind_param("i",$id);
$sql->execute();
$items = array();
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; //return an array
}

public function search($keyword)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE `name` LIKE ?");
        $keyword = "%$keyword%";
        $sql->bind_param("s", $keyword);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
}