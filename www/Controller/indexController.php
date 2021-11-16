<?php
namespace Controller;
include_once('Model/Visitor.php');
use Model\Visitor;
include_once('Model/addInteressados.php');
use Model\addInteressados;
include_once('Model/Interessado.php');
use Model\Interessado;

class indexController
{
    public function index(){
        $ano = date('Y');
        $mes = date('m');
        $addOne = new addInteressados();
        $visitorRow = $addOne->searchMensalVisitor($ano, $mes);
        
        if($visitorRow == null)
        {
            $date = $ano."-".$mes;
            $visitor = new Visitor($date, 0);
            $addOne->insertVisitor($visitor);
        }
        else 
        {
            $addOne->updateVisitor($ano, $mes);
        }
        require('View/home.php');
    }
    public function goContato(){
        require('View/contato.php');
    }
    
    public function sendMessage(){
            if(isset($_POST['enviar']))
            {
                $id=null;
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $message = $_POST['message'];
      
                $messageLead = "Nome: " . $name . " \nMensagem: " . $message . " \n";
                //$envio = mail(ContactEmail3, "Novo Interessado", $messageLead);
      
                $interessado = new Interessado($id, $name, $email, $phone, $message, null);
                $addOne = new addInteressados();
                $addOne->insertInteressado($interessado);
                
                 unset($_POST['email']);
                 unset($_POST['phone']);
                 unset($_POST['subject']);
                 unset($_POST['message']);
                 
                 $firstName = explode(" ", $name);
                 header("Location: " . DIRPAGE . "/contato?sucess=$firstName[0]");
                 exit;
            }
          else
            header("Location: /index.php");
            exit;
        }
    public function goEmpresa(){
        require('View/about.php');
    }
    public function goCachaca(){
        require('View/cachaca.php');
    }
    public function goDerivados(){
        require('View/derivados.php');
    }
    public function goApicultura(){
        require('View/apicultura.php');
    }
    public function goHorta(){
        require('View/horta.php');
    }
    public function goMedicinais(){
        require('View/medicinais.php');
    }
    public function goOvos(){
        require('View/ovo.php');
    }

}
