<?php
namespace Model;
use Model\ConexaoDB;
require_once("ConexaoDB.php");
use Model\Interessado;


class addInteressados extends ConexaoDB{
    
    private $Db;
    
    
    public function insertInteressado(Interessado $interessado) {
        $id = null;
        $data = null;
        $this->Db = $this->ConexaoDB()->prepare("INSERT INTO interessado VALUES (:IDInteressado, :Nome, :Email, :Telefone, :Mensagem, :Data)");
        $this->Db->bindParam(":IDInteressado", $id, \PDO::PARAM_STR);
        $this->Db->bindValue(":Nome", $interessado->getNome(), \PDO::PARAM_STR);
        $this->Db->bindValue(":Telefone", $interessado->getTelefone(), \PDO::PARAM_STR);
        $this->Db->bindValue(":Email", $interessado->getEmail(), \PDO::PARAM_STR);
        $this->Db->bindValue(":Mensagem", $interessado->getMensagem(), \PDO::PARAM_STR);
        $this->Db->bindParam(":Data", $data, \PDO::PARAM_STR);
        $this->Db->execute();
    }
    
    public function insertVisitor(Visitor $visitor) {
        $id = null;
        $row =0;
        $this->Db = $this->ConexaoDB()->prepare("INSERT INTO visitas VALUES (:IDVisita, :Visitas_agrosantairia, :Data)");
        $this->Db->bindParam(":IDVisita", $id, \PDO::PARAM_STR);
        $this->Db->bindParam(":Visitas_agrosantairia", $row, \PDO::PARAM_INT);
        $this->Db->bindValue(":Data", $id, \PDO::PARAM_STR);
        $this->Db->execute();
    }
    
    public function updateVisitor($ano, $mes) {
        $date = $ano."-".$mes."%";
        $this->Db = $this->ConexaoDB()->prepare("UPDATE visitas SET Visitas_agrosantairia=Visitas_agrosantairia+1 where Data like :Data");
        $this->Db->bindParam(":Data", $date, \PDO::PARAM_STR);
        $this->Db->execute();
    }
    
    public function searchMensalVisitor($ano, $mes) {
        $date = $ano."-".$mes."%";
        $Datafetch = $this->Db = $this->ConexaoDB()->prepare("SELECT * from visitas where Data like :Data");
        $this->Db->bindParam(":Data", $date, \PDO::PARAM_STR);
        $Datafetch->execute();
        
        $registryArray = array();
        while ($fetch = $Datafetch->fetch(\PDO::FETCH_ASSOC)) {
            $visitor = new Visitor($fetch['Data'], $fetch['Visitas_agrosantairia']);
            array_push($registryArray, $visitor);
        }
        return $registryArray;
    }
}