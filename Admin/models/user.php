<?php
class User extends Db{
    public function getAllUsers()
    {
        $sql = self::$connection->prepare("SELECT * FROM users");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function addUser($user_name,$pass)
    {
        $sql = self::$connection->prepare("INSERT INTO `users`(`user_name`, `password`) VALUES (?,?)");
        $sql->bind_param("ss", $user_name, $pass);
        return $sql->execute(); //return an object
    }
    public function delUser($user_id)
    {
        $sql = self::$connection->prepare("DELETE FROM `users` WHERE `user_id` =?");
        $sql->bind_param("i", $user_id);
        return $sql->execute(); //return an object
    }
    public function getUserById($user_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `users` WHERE `user_id` = ?");
        $sql->bind_param("i",$user_id);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    public function editUser($user_name,$pass,$user_id)
    {
        $sql = self::$connection->prepare("UPDATE `users` SET ,`user_name`=?,`password`=?WHERE `user_id`=?");
        $sql->bind_param("ssi", $user_name,$pass,$user_id);
        return $sql->execute(); //return an object
    }
    public function countUsers()
    {
        $sql = self::$connection->prepare("SELECT COUNT(*) FROM `users`");
        $sql->execute(); //return an object       
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
}