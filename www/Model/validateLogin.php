<?php
namespace Model;
use Model\ConexaoDB;
require_once("ConexaoDB.php");
include_once('Model/User.php');
use Model\User;


class validateLogin extends ConexaoDB{
    
    private $Db;
    
    
    public function loginUser(String $user, String $password) {
        
        $Datafetch = $this->Db = $this->ConexaoDB()->prepare("SELECT user, password, IDGroup from login where user = :user AND password = md5(:password);");
        $this->Db->bindParam(":user", $user, \PDO::PARAM_STR);
        $this->Db->bindParam(":password", $password, \PDO::PARAM_STR);
        $Datafetch->execute();
        
        $loginArray = array();
        while ($fetch = $Datafetch->fetch(\PDO::FETCH_ASSOC)) {
            $account = new User($fetch['user'], $fetch['password'], $fetch['IDGroup']);
            array_push($loginArray, $account);
        }  
        return $loginArray;
    }
}