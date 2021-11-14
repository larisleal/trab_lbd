<?php
namespace Model;
use Model\ConexaoDB;
require_once("ConexaoDB.php");
include_once('Model/VendaCliente.php');
use Model\VendaCliente;


class selectSale extends ConexaoDB{
    
    private $Db;
    
    
    public function selectAllSales() {
        $Datafetch = $this->Db = $this->ConexaoDB()->prepare(' SELECT IDVenda, Produto, Quantidade, Valor, Total, a.IDCliente, Nome, DATE_FORMAT(DataNasc, "%d/%m/%Y") as DataNasc, Email, Telefone
         from vendas a join clientes b on (a.IDCliente = b.IDCliente)');
        $Datafetch->execute();
        
        $vendaArray = array();
        while ($fetch = $Datafetch->fetch(\PDO::FETCH_ASSOC)) {
            $id= $fetch['IDVenda'];
            $venda = new VendaCliente($id, $fetch['Produto'], $fetch['Quantidade'], $fetch['Valor'], $fetch['Total'], $fetch['IDCliente'] , 
            $fetch['Nome'], $fetch['DataNasc'], $fetch['Email'], $fetch['Telefone']);
            array_push($vendaArray, $venda);
        }  
        return $vendaArray;
    }

    public function insertSale(Venda $sale) {
        $id = null;
        $this->Db = $this->ConexaoDB()->prepare("INSERT INTO vendas VALUES (:IDVenda, :Produto, :Quantidade, :Valor, :Total, :IDCliente)");
        $this->Db->bindParam(":IDVenda", $id, \PDO::PARAM_STR);
        $this->Db->bindValue(":Produto", $sale->getProduct(), \PDO::PARAM_STR);
        $this->Db->bindValue(":Quantidade", $sale->getQuantidade(), \PDO::PARAM_STR);
        $this->Db->bindValue(":Valor", $sale->getValor(), \PDO::PARAM_INT);
        $this->Db->bindValue(":Total", $sale->getTotal(), \PDO::PARAM_INT);
        $this->Db->bindValue(":IDCliente", $sale->getClientid(), \PDO::PARAM_INT);
        return $this->Db->execute();
    }
    public function editSale(Venda $sale) {
        $this->Db = $this->ConexaoDB()->prepare("UPDATE vendas SET Produto=:Produto, Quantidade=:Quantidade, Valor=:Valor, Total=:Total, IDCliente=:IDCliente
         WHERE IDVenda=:IDVenda");
        $this->Db->bindValue(":IDVenda", $sale->getId(), \PDO::PARAM_INT);
        $this->Db->bindValue(":Produto", $sale->getProduct(), \PDO::PARAM_STR);
        $this->Db->bindValue(":Quantidade", $sale->getQuantidade(), \PDO::PARAM_STR);
        $this->Db->bindValue(":Valor", $sale->getValor(), \PDO::PARAM_INT);
        $this->Db->bindValue(":Total", $sale->getTotal(), \PDO::PARAM_INT);
        $this->Db->bindValue(":IDCliente", $sale->getClientid(), \PDO::PARAM_INT);
        return $this->Db->execute();
    }

    public function removeSale($id) {
        $this->Db = $this->ConexaoDB()->prepare("DELETE FROM vendas WHERE IDVenda=:IDVenda");
        $this->Db->bindParam(":IDVenda", $id, \PDO::PARAM_INT);
        return $this->Db->execute();
    }
}