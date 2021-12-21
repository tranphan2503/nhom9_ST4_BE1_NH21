<?php
class User extends Db
{
public function checkLogin($username,$password)
{
    $sql = self::$connection->prepare("SELECT * FROM users WHERE `user_name` = ? AND `password`=?");
        $password = md5($password);
        $sql->bind_param("ss", $username, $password);
        $sql->execute();
        //$items = array();
        $items = $sql->get_result()->num_rows;
        if($items == 1){
            return true;
        }
        else{
            return false;
        }
}
public function addUser($user_name,$pass)
    {
        $sql = self::$connection->prepare("INSERT INTO `users`(`user_name`,`password`) VALUES (?,?)");
        $sql->bind_param("ss", $user_name, $pass);
        return $sql->execute(); //return an object
    }
}