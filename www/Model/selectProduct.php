<?php
namespace Model;
use Model\ConexaoDB;
require_once("ConexaoDB.php");
include_once('Model/Product.php');
use Model\Product;


class selectProduct extends ConexaoDB{
    
    private $Db;
    
    
    public function selectAllProduct() {
        $Datafetch = $this->Db = $this->ConexaoDB()->prepare('SELECT * from produtos');
        $Datafetch->execute();
        
        $productArray = array();
        while ($fetch = $Datafetch->fetch(\PDO::FETCH_ASSOC)) {
            $id= $fetch['IDProduto'];
            $product = new Product($id, $fetch['Nome']);
            array_push($productArray, $product);
        }  
        return $productArray;
    }

    public function insertProduct(Product $product) {
        $id = null;
        $this->Db = $this->ConexaoDB()->prepare("INSERT INTO produtos VALUES (:IDProduto, :Nome)");
        $this->Db->bindParam(":IDProduto", $id, \PDO::PARAM_STR);
        $this->Db->bindValue(":Nome", $product->getName(), \PDO::PARAM_STR);
        return $this->Db->execute();
    }

    public function editProduct(Product $product) {
        $this->Db = $this->ConexaoDB()->prepare("UPDATE produtos SET Nome=:Nome WHERE IDProduto =:IDProduto");
        $this->Db->bindValue(":IDProduto", $product->getId(), \PDO::PARAM_INT);
        $this->Db->bindValue(":Nome", $product->getName(), \PDO::PARAM_STR);
        return $this->Db->execute();
    }

    public function removeProduct($id) {
        $this->Db = $this->ConexaoDB()->prepare("DELETE FROM produtos WHERE IDProduto=:IDProduto");
        $this->Db->bindParam(":IDProduto", $id, \PDO::PARAM_INT);
        return $this->Db->execute();
    }
}