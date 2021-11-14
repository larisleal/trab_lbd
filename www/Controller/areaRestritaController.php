<?php
namespace Controller;
include_once('Model/selectLeads.php');
use Model\selectLeads;
include_once('Model/addInteressados.php');
use Model\deleteInteressados;
include_once('Model/deleteInteressados.php');
use Model\addInteressados;
use Model\Client;
include_once('Model/selectClients.php');
use Model\selectClients;
include_once('Model/selectProduct.php');
use Model\selectProduct;
include_once('Model/Product.php');
use Model\Product;
include_once('Model/Venda.php');
use Model\Venda;
include_once('Model/selectSale.php');
use Model\selectSale;

class areaRestritaController
{
    public function index(){
      $ano = date('Y');
      $mes = date('m');
      
      $leads = new selectLeads();
      $leadArray = $leads->selectAllLeads();
      $addOne = new addInteressados();
      $visitorRow = $addOne->searchMensalVisitor($ano, $mes);
      $_SESSION['leadarray']=serialize($leadArray);
      $_SESSION['visitor']=serialize($visitorRow);
      require('View/arearestrita.php');
    }


    //LEADS CRUD  --------------------------------------------------------

    public function removeLead(){
        if(isset($_POST['delete'])){
        $id = $_POST['id'];
  
        $rmOne = new deleteInteressados();
        $rmOne->dtInteressado($id);
        header("Location: " . DIRPAGE . "/leads");
        exit;
       }
       header("Location: " . DIRPAGE . "/leads");
       exit;
    }

    public function goLeads()
    {
        $leads = new selectLeads();
        $leadArray = $leads->selectAllLeads();
        $_SESSION['leadarray']=serialize($leadArray);
        require 'View/leads.php';
    }
    //LEADS CRUD       -------------------------------------------------



    //CLIENT CRUD ----------------------------------------------------------------------------------------------
    public function goClients() {
        $client = new selectClients();
        $clientArray = $client->selectAllClients();
        $_SESSION['clientarray']=serialize($clientArray);
          require 'View/clients.php';
      }

      public function editClient()
      {
        if(isset($_POST['save']))
        {
            $id=$_POST['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $datanasc = $_POST['datanasc'];
            
    
            $client = new Client($id, $name, $datanasc, $email, $phone);
            $selectClient = new selectClients();
            if($selectClient->editClient($client)){
            header("Location: " . DIRPAGE . "/clients?edit=sucess");
            exit;
            }
            else {
                header("Location: " . DIRPAGE . "/clients?edit=fail");
                exit;
            }
        }
        else {
            header("Location: " . DIRPAGE . "/clients?edit=fail");
            exit;
        }
      }

    public function goInsertClient()
    {
        require 'View/inserirCliente.php';
    }

    public function removeClient()
    {
        if(isset($_POST['delete'])){
            $id = $_POST['id'];
      
            $rmOne = new selectClients();
            if($rmOne->removeCliente($id)){
                header("Location: " . DIRPAGE . "/clients?delete=sucess");
                exit;
            }
            else {
                header("Location: " . DIRPAGE . "/clients?delete=fail");
                exit;
            }
        }
        else
        {
            header("Location: " . DIRPAGE . "/clients?delete=fail");
            exit;
        }
    }

      public function insertClient() {
        if(isset($_POST['submit']))
        {
            $id=null;
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $datanasc = $_POST['datanasc'];
    
            $client = new Client($id, $name, $datanasc, $email, $phone);
            $selectClient = new selectClients();
            if($selectClient->insertClient($client)){
                header("Location: " . DIRPAGE . "/clients?insert=sucess");
                exit;
            }
            else{
                header("Location: " . DIRPAGE . "/clients?insert=fail");
                exit;
            }
        }
        else {
            header("Location: " . DIRPAGE . "/clients?insert=fail");
            exit;
        }
      }

    //CLIENT CRUD ----------------------------------------------------------------------------------------------------------


    //Vendas CRUD
    public function goSales()
    {
        $sales = new selectSale();
        $saleArray = $sales->selectAllSales();
        $client = new selectClients();
        $clientArray = $client->selectAllClients();
        $selectProduct = new selectProduct();
        $producArray = $selectProduct->selectAllProduct();

        $_SESSION['clientarray']=serialize($clientArray);
        $_SESSION['productarray']=serialize($producArray);
        $_SESSION['salesarray']=serialize($saleArray);
        
        require 'View/viewSales.php';
    }
    public function goInsertSales()
    {
        $client = new selectClients();
        $clientArray = $client->selectAllClients();
        $selectProduct = new selectProduct();
        $producArray = $selectProduct->selectAllProduct();

        $_SESSION['clientarray']=serialize($clientArray);
        $_SESSION['productarray']=serialize($producArray);
        require 'View/inserirVenda.php';
    }

    public function insertSale()
    {
        if(isset($_POST['clients'])){
            if(isset($_POST['submit'])){
                $totalInserts = 0;
                for ($i=0; $i < count($_POST['clients']) ; $i++) { 
                    $id=null;
                    $clientid = $_POST['clients'][$i];
                    $product = $_POST['produto'][$i];
                    $quantidade = $_POST['quantidade'][$i];
                    $valor = $_POST['valor'][$i];
                    $total = $_POST['total'][$i];

                    $sale = new Venda($id, $product, $quantidade, $valor, $total, $clientid);
                    $insert = new selectSale();
                    if($insert->insertSale($sale)){
                        $totalInserts++;
                    }
                }
                if($totalInserts == count($_POST['clients'])){
                    header("Location: " . DIRPAGE . "/sales?insert=sucess");
                    exit;
                }
                else{
                    header("Location: " . DIRPAGE . "/sales?insert=fail");
                    exit;
                }

            }
            else{
                header("Location: " . DIRPAGE . "/sales?insert=fail");
                    exit;
            }
        }
        else
        {
            header("Location: " . DIRPAGE . "/sales/insert?insert=nothing");
                    exit;
        }

    }

    public function editSale()
      {
        if(isset($_POST['save']))
        {
            $id=$_POST['id'];
            $idcliente = $_POST['clients'];
            $produto = $_POST['produto'];
            $quantidade = $_POST['quantidade'];
            $valor = $_POST['valor'];
            $total = $_POST['total'];
            
    
            $venda = new Venda($id, $produto, $quantidade, $valor, $total, $idcliente);
            $selectSale = new selectSale();
            if($selectSale->editSale($venda)){
            header("Location: " . DIRPAGE . "/sales?edit=sucess");
            exit;
            }
            else {
                header("Location: " . DIRPAGE . "/sales?edit=fail");
                exit;
            }
        }
        else {
            header("Location: " . DIRPAGE . "/sales?edit=fail");
            exit;
        }
      }

    public function removeSale()
    {
        if(isset($_POST['delete'])){
            $id = $_POST['id'];
      
            $rmOne = new selectSale();
            if($rmOne->removeSale($id)){
                header("Location: " . DIRPAGE . "/sales?delete=sucess");
                exit;
            }
            else{
                header("Location: " . DIRPAGE . "/sales?delete=fail");
                exit;
            }
           }
        else
        {
           header("Location: " . DIRPAGE . "/sales?delete=fail");
           exit;
        }
    }
    
    //Vendas CRUD

    //Product

    public function goInsertProduct()
    {
       require("View/inserirProduto.php");

    }

    public function goViewProducts() 
    {
        $products = new selectProduct();
        $productsArray = $products->selectAllProduct();
        $_SESSION['productarray']=serialize($productsArray);
        require ("View/products.php");
    }

    public function editProduct()
      {
        if(isset($_POST['save']))
        {
            $id=$_POST['id'];
            $name = $_POST['name'];
            
    
            $product = new Product($id, $name);
            $selectProduct = new selectProduct();
            if($selectProduct->editProduct($product)){
            header("Location: " . DIRPAGE . "/tableproducts?edit=sucess");
            exit;
            }
            else {
                header("Location: " . DIRPAGE . "/tableproducts?edit=fail");
                exit;
            }
        }
        else {
            header("Location: " . DIRPAGE . "/tableproducts?edit=fail");
            exit;
        }
      }

      public function removeProduct()
      {
          if(isset($_POST['delete'])){
              $id = $_POST['id'];
        
              $rmOne = new selectProduct();
              if($rmOne->removeProduct($id)){
                  header("Location: " . DIRPAGE . "/tableproducts?delete=sucess");
                  exit;
              }
              else{
                  header("Location: " . DIRPAGE . "/tableproducts?delete=fail");
                  exit;
              }
             }
          else
          {
             header("Location: " . DIRPAGE . "/tableproducts?delete=fail");
             exit;
          }
      }

      

    public function insertProduct()
    {
        if(isset($_POST['submit']))
        {
            $id=null;
            $name = $_POST['name'];
    
            $product = new Product($id, $name);
            $selectProduct = new selectProduct();
            if($selectProduct->insertProduct($product)){
                header("Location: " . DIRPAGE . "/product/insert?insert=sucess");
                exit;
            }
            else {
                header("Location: " . DIRPAGE . "/product/insert?insert=fail");
                exit;
            }
        }
        else {
            header("Location: " . DIRPAGE . "/product/insert?insert=fail");
            exit;
        }

    }

   

    //Product





    // public function goClients() {
    //     $f = "";


    //     if(isset($_GET['filter']))
    //         $f = $_GET['filter'];

    //     switch($f)
    //     {
    //         case "birth":
    //             $this->goStudentsByBirth();
    //         break;

    //         case "courseyear":
    //             $this->goStudentsByCourseYear();
    //         break;

    //         default:
    //             $this->goAllClients();
    //     }
    //   }

    // public function goAllClients()
    // {
    //     $student= new selectStudents();
    //     $studentArray = $student->selectAllStudents();
    //     $_SESSION['studentArray']= serialize($studentArray);
    //     require 'View/clients.php';
    // }


//     public function goImportCsv(){
    
//         $file = $_FILES["file"]["tmp_name"];
//         $nome = $_FILES["file"]["name"];

//         $ext = explode(".", $nome);
//         $extension = end($ext);

//         if($extension != "csv"){
//             $_SESSION['ext']='wrong';
//             $this->goAllClients();
//         }
//         else
//         {
//             $sep = $_POST["csvformat"];

//             $object = fopen($file, 'r');

//             while(($data = fgetcsv($object, 1000, $sep)) != false)
//             {
//                 $id = null;

//                 if(count($data, COUNT_RECURSIVE) == 7 || count($data, COUNT_RECURSIVE) == 8){
//                 $student = new Student($id, utf8_encode($data[0]), utf8_encode($data[1]), $data[2], $data[3], $data[4], $data[5], $data[6]);

//                 if(!($data[1] == null && $data[2] == null && $data[3] == null && $data[4] == null && $data[5] == null && $data[6] == null)){
//                     $addC = new selectStudents();
//                     $addC->insertStudent($student);
//                 }
//                 else
//                     header("Location: " . DIRPAGE . "/clients?import=fail");

//             }
//         }
//         fclose($object);
//         header("Location: " . DIRPAGE . "/clients?import=sucess");
//     }
    
// }
// public function goExport(){
//     session_start();
//     if(isset($_SESSION['studentArray']))
//     {
//         $studentArray = unserialize($_SESSION['studentArray']);
//     }
//     else
//      header("Location: " . DIRPAGE . "/clients");

//     $csvArray = array();
    
//     $sep = $_POST["csvformat"];

//     if($sep == ";"){
//         $sepH = ",";
//         $nome= "Alunos - Separação por ponto e vírgula";}
//     else
//     {
//         $sepH = ";";
//         $nome= "Alunos - Separação por vírgula";
//     }

//     header("Content-type: application/csv");
//     header("Content-Disposition: attachment; filename=$nome.csv");
//     header("Content-Transfer-Encoding: binary");
//     header("Pragma: no-cache");


//     foreach ($studentArray as $value)
//     {
//         array_push($csvArray, array(utf8_decode($value->getNome()), utf8_decode($value->getEmail()), $value->getDataNasc(), $value->getTelefone(), $value->getCurso(), $value->getDataUltimoCurso(),
//         $value->getUnidade())); 
//     }
//     if($csvArray != null){
//         $out = fopen( 'php://output', 'w' );
        
//         fputcsv($out, array("Nome do Aluno","E-mail","Data de nascimento", "Celular","Curso","Data do último curso", "Unidade"), $sepH);
//         foreach ($csvArray as $result )
//         {
//             fputcsv( $out, $result, $sep);
//         }
//         fclose( $out );
//     }
//     else 
//          header("Location: " . DIRPAGE . "/clients");
    
   
}