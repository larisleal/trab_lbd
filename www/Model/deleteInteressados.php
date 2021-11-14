<?php
namespace Model;
use Model\ConexaoDB;
require_once("ConexaoDB.php");


class deleteInteressados extends ConexaoDB{
    
    private $Db;
    
    
    public function dtInteressado($id) {
        $this->Db = $this->ConexaoDB()->prepare("DELETE FROM interessado WHERE IDInteressado=:IDInteressado");
        $this->Db->bindParam(":IDInteressado", $id, \PDO::PARAM_INT);
        $this->Db->execute();
    }
}