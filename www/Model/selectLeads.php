<?php
namespace Model;
use Model\ConexaoDB;
require_once("ConexaoDB.php");
include_once('Model/Interessado.php');
use Model\Interessado;


class selectLeads extends ConexaoDB{
    
    private $Db;
    
    
    public function selectAllLeads() {
        $Datafetch = $this->Db = $this->ConexaoDB()->prepare("SELECT * from interessado");
        $Datafetch->execute();
        
        $leadArray = array();
        while ($fetch = $Datafetch->fetch(\PDO::FETCH_ASSOC)) {
            $id= $fetch['IDInteressado'];
            $interessado = new Interessado($id, $fetch['Nome'], $fetch['Email'], $fetch['Telefone'], $fetch['Mensagem'], $fetch['Data']);
            array_push($leadArray, $interessado);
        }  
        return $leadArray;
    }
    
    
    
    
}