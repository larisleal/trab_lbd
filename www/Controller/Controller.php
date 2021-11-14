<?php 
include_once('Model/Interessado.php');
include_once('Model/addInteressados.php');
include_once('Model/validateLogin.php');
use Model\addInteressados;
use Model\validateLogin;
use Model\Interessado;
include_once 'Model/selectLeads.php';
use Model\selectLeads;
include_once 'Model/selectClients.php';
use Model\selectClients;
include_once 'Model/Visitor.php';
use Model\Visitor;
include_once 'Model/deleteInteressados.php';
use Model\deleteInteressados;
include_once 'Model/Client.php';
use Model\Client;
include_once 'Model/addClient.php';
use Model\addClient;


class Controller
{
    
public function __Construct() {
}


public function init() {
    
    if (isset($_GET['page'])) {
        $f = $_GET['page'];
    }
    else 
        $f = "";
    
    
    switch ($f) {
        case "enviado":
            $this->inserirInteressado();
            break;
        
        case "delete":
            $this->deleteInteressado();
            break;
        
        case "login":
            $this->login();
            break;
        
        case "apicultura":
            $this->goApicultura();
            break;

        case "blog-single":
            $this->goBlogSingle();
            break;

        case "blog":
            $this->goBlog();
            break;

        case "cachaca":
            $this->goCachaca();
            break;
        
        case "derivados":
            $this->goDerivados();
            break;

        case "horta":
            $this->goHorta();
            break;

        case "ovo":
            $this->goOvo();
            break;
        
        case "medicinais":
            $this->goMedicinais();
            break;

        case "products":
            $this->goProducts();
            break;
        case "single-product":
            $this->goSingleProduct();
            break;
            

        case "sales":
            $this->sales();
            break;

        case "exportar":
            $this->goExport();
            break;
            
        case "logar":
            $this->tryLogin();
            break;
            
        case "leads":
            $this->goLeadsPage();
            break;
        
        
        case "recover":
            $this->goPassRecover();
            break;
            
        case "clients":
            $this->goClients();
            break;
        
        case "importar":
            $this->goImportPage();
            break;

        case "importcsv":
            $this->goImportCsv();
            break;
    
            
        case "logout":
            $this->goLogout();
            break;

        case "arearestrita":
            $this->goAreaRestrita();
            break;
        
        case "inserirCliente":
        $this->goInserirCliente();
        break;  
        
        case "inserirproduto":
        $this->goInserirProduto();
        break;

        case "viewsales":
        $this->goViewSales();
        break;
            
        default:
            $this->home();
        break;

    }

  }
  public function goApicultura()
  {
    require 'View/apicultura.php';
  }
  public function goBlogSingle()
  {
    require 'View/blog-single.php';
  }
  public function goBlog()
  {
    require 'View/blog.php';
  }
  public function goCachaca()
  {
    require 'View/cachaca.php';
  }
  public function goDerivados()
  {
    require 'View/derivados.php';
  }
  public function goHorta()
  {
    require 'View/horta.php';
  }
  public function goOvo()
  {
    require 'View/ovo.php';
  }
  public function goMedicinais()
  {
    require 'View/medicinais.php';
  }
  public function goProducts()
  {
    require 'View/products.php';
  }
  public function goSingleProducts()
  {
    require 'View/single-products.php';
  }

  public function goInserirCliente()
  {
    require 'View/inserirCliente.php';
  }

  public function goInserirProduto()
  {
      require 'View/inserirProduto.php';    
  }
  public function goViewSales()
  {
      require 'View/viewSales.php';    
  }

  public function home(){
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
      
      require 'View/home.php';
  }
  public function goImportPage(){
      require 'View/importPage.php';
  }

  public function goLeads(){
    require 'View/importPage.php';
}

  public function goLogout(){
    require 'View/login.php';
}

  public function goPassRecover(){
    require 'View/passRecover.php';
}

  public function sales(){
    require 'View/salesPage.php';
}

public function goExport(){
    $clients = new selectClients();
    $clientArray = $clients->selectAllClients();
    $csvArray = array();
    
    header("Content-type: application/csv");
    header("Content-Disposition: attachment; filename=Clients.csv");
    header("Content-Transfer-Encoding: binary");
    header("Pragma: no-cache");
    
    
    foreach ($clientArray as $value)
    {
        array_push($csvArray, array($value->getNome(), $value->getNome_fantasia(), $value->getCnpj(), $value->getInscricao(), $value->getEndereco(), 
        $value->getCep(), $value->getEmail(), $value->getObservacao(), ";")); 
    }
    if($csvArray != null){
        $out = fopen( 'php://output', 'w' );
        
        fputcsv($out, array("Nome","Nome Fantasia","CNPJ", "Inscrição","Endereço","CEP", "E-mail", "Observação"), ";");
        foreach ($csvArray as $result )
        {
            fputcsv( $out, $result );
        }
        fclose( $out );
    }
    else 
        header("Location: ?page=clients");
   
}

public function goImportCsv(){
    
        $file = $_FILES["file"]["tmp_name"];
        $nome = $_FILES["file"]["name"];

        $ext = explode(".", $nome);
        $extension = end($ext);

        if($extension != "csv"){
            $client = new selectClients();
            $clientArray = $client->selectAllClients();
            $_SESSION['clientarray']=serialize($clientArray);
            $_SESSION['ext']='wrong';
            require("View/clients.php");
        }
        else
        {
            $sep = $_POST["csvformat"];

            $object = fopen($file, 'r');

            while(($data = fgetcsv($object, 1000, $sep)) != false)
            {
                $id = null;

                if(count($data, COUNT_RECURSIVE) == 8 || count($data, COUNT_RECURSIVE) == 9){
                $client = new Client($id, $data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[7]);

                if(!($data[1] == null && $data[2] == null && $data[3] == null && $data[4] == null && $data[5] == null && $data[6] == null && $data[7] == null)){
                    $addC = new addClient();
                    $addC->insertClient($client);
                }

            }
        }
        fclose($object);
        header("Location: ?page=clients");
    }
    
}
  
  
  public function deleteInteressado(){
      if(isset($_POST['delete'])){
      $id = $_POST['id'];

      $rmOne = new deleteInteressados();
      $rmOne->dtInteressado($id);
      header("Location: ?page=leads");
     }
     header("Location: ?page=leads");
  }
  
  public function goAreaRestrita(){
      session_start();
      $ano = date('Y');
      $mes = date('m');
      
      $leads = new selectLeads();
      $leadArray = $leads->selectAllLeads();
      $addOne = new addInteressados();
      $visitorRow = $addOne->searchMensalVisitor($ano, $mes);
      $_SESSION['leadarray']=serialize($leadArray);
      $_SESSION['visitor']=serialize($visitorRow);
      require 'View/arearestrita.php';
  }
  
  public function goLeadsPage(){
      $leads = new selectLeads();
      $leadArray = $leads->selectAllLeads();
      $_SESSION['leadarray']=serialize($leadArray);
      require 'View/leads.php';
  }

  public function goClients() {
    $client = new selectClients();
    $clientArray = $client->selectAllClients();
    $_SESSION['clientarray']=serialize($clientArray);
      require 'View/clients.php';
  }
  
  public function login(){
      require 'View/login.php';
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
              header("Location: ?page=arearestrita");
              
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
  
  public function inserirInteressado() {
      if(isset($_POST['enviar']))
      {
          $id=null;
          $name = $_POST['name'];
          $email = $_POST['email'];
          $phone = $_POST['phone'];
          $message = $_POST['message'];

          $messageLead = "Nome: " . $name . " \nMensagem: " . $message . " \n";
          $envio = mail("francisco@tecreason.com.br", "Novo Interessado", $messageLead);

          $interessado = new Interessado($id, $name, $email, $phone, $message, null);
          $addOne = new addInteressados();
          $addOne->insertInteressado($interessado);
          
           unset($_POST['email']);
           unset($_POST['phone']);
           unset($_POST['subject']);
           unset($_POST['message']);
           
           $firstName = explode(" ", $name);
           header("Location: index.php?sucess=$firstName[0]");
      }
    else
      header("Location: /index.php");
  }
    
  
}
