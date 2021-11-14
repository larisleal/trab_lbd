<?php

namespace Model;

class VendaCliente {

    private $clientid;
    private $product;
    private $quantidade;
    private $valor;
    private $total;
    private $nomeCliente;
    private $id;
    private $DataNasc;
    private $email;
    private $telefone;


    public function __construct($id, $product, $quantidade, $valor, $total, $clientid, $nomeCliente, $DataNasc, $email, $telefone)
    {
        $this->clientid = $clientid;
        $this->product = $product;
        $this->quantidade = $quantidade;
        $this->valor = $valor;
        $this->total = $total; 
        $this->id = $id;
        $this->nomeCliente = $nomeCliente;
        $this->DataNasc = $DataNasc;
        $this->email = $email;
        $this->telefone = $telefone;
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

    /**
     * Get the value of nomeCliente
     */ 
    public function getNomeCliente()
    {
        return $this->nomeCliente;
    }

    /**
     * Set the value of nomeCliente
     *
     * @return  self
     */ 
    public function setNomeCliente($nomeCliente)
    {
        $this->nomeCliente = $nomeCliente;

        return $this;
    }

    /**
     * Get the value of DataNasc
     */ 
    public function getDataNasc()
    {
        return $this->DataNasc;
    }

    /**
     * Set the value of DataNasc
     *
     * @return  self
     */ 
    public function setDataNasc($DataNasc)
    {
        $this->DataNasc = $DataNasc;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of telefone
     */ 
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set the value of telefone
     *
     * @return  self
     */ 
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }
}