<?php
namespace Model;
use Model\ConexaoDB;
require_once("ConexaoDB.php");
include_once('Model/Client.php');
use Model\Client;


class selectClients extends ConexaoDB{
    
    private $Db;
    
    
    public function selectAllClients() {
        $Datafetch = $this->Db = $this->ConexaoDB()->prepare('SELECT IDCliente, Nome, DATE_FORMAT(DataNasc, "%d/%m/%Y") as DataNasc, Email, Telefone  from clientes');
        $Datafetch->execute();
        
        $clientsArray = array();
        while ($fetch = $Datafetch->fetch(\PDO::FETCH_ASSOC)) {
            $id= $fetch['IDCliente'];
            if($fetch['IDCliente'] != 0){
                $client = new Client($id, $fetch['Nome'], $fetch['DataNasc'], $fetch['Email'], $fetch['Telefone']);
                array_push($clientsArray, $client);
            }
        }  
        return $clientsArray;
    }

    public function insertClient(Client $client) {
        $id = null;
        $this->Db = $this->ConexaoDB()->prepare("INSERT INTO clientes VALUES (:IDCliente, :Nome, STR_TO_DATE( :DataNasc, '%d/%m/%Y'), 
        :Email, :Telefone)");
        $this->Db->bindParam(":IDCliente", $id, \PDO::PARAM_STR);
        $this->Db->bindValue(":Nome", $client->getNome(), \PDO::PARAM_STR);
        $this->Db->bindValue(":Telefone", $client->getTelefone(), \PDO::PARAM_STR);
        $this->Db->bindValue(":Email", $client->getEmail(), \PDO::PARAM_STR);
        $this->Db->bindValue(":DataNasc", $client->getDataNasc(), \PDO::PARAM_STR);
        return $this->Db->execute();
    }

    public function editClient(Client $client)
    {
        $this->Db = $this->ConexaoDB()->prepare("UPDATE clientes SET Nome=:Nome, Email=:Email, DataNasc= STR_TO_DATE( :DataNasc, '%d/%m/%Y'), 
        Telefone=:Telefone WHERE IDCliente=:IDCliente");
        $this->Db->bindValue(":IDCliente", $client->getId(), \PDO::PARAM_INT);
        $this->Db->bindValue(":Nome", $client->getNome(), \PDO::PARAM_STR);
        $this->Db->bindValue(":Email", $client->getEmail(), \PDO::PARAM_STR);
        $this->Db->bindValue(":DataNasc", $client->getDataNasc(), \PDO::PARAM_STR);
        $this->Db->bindValue(":Telefone", $client->getTelefone(), \PDO::PARAM_STR);
        
        return $this->Db->execute();

        
    }

    public function removeCliente($id) {
        $this->Db = $this->ConexaoDB()->prepare("DELETE FROM clientes WHERE IDCliente=:IDCliente");
        $this->Db->bindParam(":IDCliente", $id, \PDO::PARAM_INT);
        return $this->Db->execute();
    }
    
    
    
    
}