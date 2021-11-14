<?php

namespace Model;

class Venda {

    private $product;
    private $quantidade;
    private $valor;
    private $total;
    private $clientid;
    private $id;
 


    public function __construct($id, $product, $quantidade, $valor, $total, $clientid)
    {
        $this->clientid = $clientid;
        $this->product = $product;
        $this->quantidade = $quantidade;
        $this->valor = $valor;
        $this->total = $total; 
        $this->id = $id;
    }

    /**
     * Get the value of clientid
     */ 
    public function getClientid()
    {
        return $this->clientid;
    }

    /**
     * Set the value of clientid
     *
     * @return  self
     */ 
    public function setClientid($clientid)
    {
        $this->clientid = $clientid;

        return $this;
    }

    /**
     * Get the value of product
     */ 
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set the value of product
     *
     * @return  self
     */ 
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get the value of quantidade
     */ 
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * Set the value of quantidade
     *
     * @return  self
     */ 
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    /**
     * Get the value of valor
     */ 
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     *
     * @return  self
     */ 
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get the value of total
     */ 
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set the value of total
     *
     * @return  self
     */ 
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

}