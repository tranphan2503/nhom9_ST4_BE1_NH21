<?php
class Manufacture extends Db{
    public function getAllManufactures()
    {
        $sql = self::$connection->prepare("SELECT * FROM manufactures ORDER BY `manu_id` DESC");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function addManufacture($manu_name)
    {
        $sql = self::$connection->prepare("INSERT 
        INTO `manufactures`(`manu_name`) 
        VALUES (?)");
        $sql->bind_param("s", $manu_name);
        return $sql->execute(); //return an object
    }
    public function delManufacture($manu_id)
    {
        $sql = self::$connection->prepare("DELETE FROM `manufactures` WHERE `manufactures`.`manu_id` =?");
        $sql->bind_param("i", $manu_id);
        return $sql->execute(); //return an object
    }
    public function getManufactureById($manu_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `manufactures` WHERE manu_id = ?");
        $sql->bind_param("i",$manu_id);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function editManu($manu_name,$manu_id)
    {
        $sql = self::$connection->prepare("UPDATE `manufactures` SET `manu_name`=? WHERE manu_id=?");
        $sql->bind_param("si", $manu_name,$manu_id);
        return $sql->execute(); //return an object
    }
    public function countManus()
    {
        $sql = self::$connection->prepare("SELECT COUNT(*) FROM `manufactures`");
        $sql->execute(); //return an object       
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
}