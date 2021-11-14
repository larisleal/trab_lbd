<?php
namespace Model;

class Client
{
    private $nome;
    private $datanasc;
    private $email;
    private $telefone;
    private $id;

    
    public function __construct($id, $nome, $datanasc, $email, $telefone) {
     $this->id= $id;
     $this->nome=$nome;
     $this->email = $email;
     $this->telefone=$telefone;
     $this->datanasc=$datanasc;
    
    }


    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of datanasc
     */ 
    public function getDatanasc()
    {
        return $this->datanasc;
    }

    /**
     * Set the value of datanasc
     *
     * @return  self
     */ 
    public function setDatanasc($datanasc)
    {
        $this->datanasc = $datanasc;

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