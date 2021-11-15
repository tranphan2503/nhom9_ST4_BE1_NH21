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
public function getProductByType($type_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE type_id = ?");
        $sql->bind_param("i", $type_id);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
public function get3ProductByType($type_id,$page,$perPage)
    {
        $firstLink = ($page - 1) * $perPage;
        $sql = self::$connection->prepare("SELECT * FROM products WHERE type_id = ? LIMIT ?,?");
        $sql->bind_param("iii", $type_id,$firstLink,$perPage);
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
function paginate($url, $total, $perPage)
{
    $totalLinks = ceil($total/$perPage);
 	$link ="";
    	for($j=1; $j <= $totalLinks ; $j++)
     	{
             if($j == $page){
                $link = $link."<li class='active'>$j</li>";
             }
             else{
                $link = $link."<li><a href='$url&page=$j'> $j </a></li>";

             }
             
     	}
     	return $link;
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