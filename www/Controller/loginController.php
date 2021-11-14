<?php
namespace Controller;
include_once('Model/validateLogin.php');
use Model\validateLogin;

class loginController
{
    public function goLogin(){
        session_start();
        if (isset($_SESSION['loginTime'])) {
            header("Location: " . DIRPAGE . "/arearestrita");
        }
        else{
            require('View/login.php');
        }
    }

    public function goLogout()
    {
       require("View/logout.php");
    }

    public function tryLogin(){
      
        if(isset($_POST['enviar']))
       {      
           $username = $_POST['username'];
           $pass = $_POST['pass'];
           $validateLogin = new validateLogin();
           $value = $validateLogin->loginUser($username, $pass);
           
           
           if($value!=null){
               session_start();
               $_SESSION['username']=$username;
               $_SESSION['password']=$pass;
               $_SESSION['loginTime'] = time();
               $_SESSION['groupid'] = $value[0]->getGroupid();
               header("Location: " . DIRPAGE . "/arearestrita"); 
               
           }
           else {
               $_SESSION["pass"]='wrong';
               include("View/login.php");
               }
       }
       else {
           $_SESSION["pass"]='wrong';
           include("View/login.php");
       }
   }
}