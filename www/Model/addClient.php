<?php
namespace Model;
use Model\ConexaoDB;
require_once("ConexaoDB.php");
use Model\Client;


class addClient extends ConexaoDB{
    
    private $Db;
    
    
    public function insertClient(Client $client) {
        $id = null;
        $this->Db = $this->ConexaoDB()->prepare("INSERT INTO clientes VALUES (:IDCliente, :Nome, :Nome_fantasia, :Cnpj, :Inscricao, :Endereco, :Cep, :Email, :Observacao)");
        $this->Db->bindParam(":IDCliente", $id, \PDO::PARAM_STR);
        $this->Db->bindValue(":Nome", $client->getNome(), \PDO::PARAM_STR);
        $this->Db->bindValue(":Nome_fantasia", $client->getNome_fantasia(), \PDO::PARAM_STR);
        $this->Db->bindValue(":Cnpj", $client->getCnpj(), \PDO::PARAM_STR);
        $this->Db->bindValue(":Inscricao", $client->getInscricao(), \PDO::PARAM_STR);
        $this->Db->bindValue(":Endereco", $client->getEndereco(), \PDO::PARAM_STR);
        $this->Db->bindValue(":Cep", $client->getCep(), \PDO::PARAM_STR);
        $this->Db->bindValue(":Email", $client->getEmail(), \PDO::PARAM_STR);
        $this->Db->bindValue(":Observacao", $client->getObservacao(), \PDO::PARAM_STR);
        $this->Db->execute();
    }
}