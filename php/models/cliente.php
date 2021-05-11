<?php

class Cliente{
    protected $nome;
    protected $cpf;
    protected $endereco;
    protected $email;
    protected $telefone;

    function Cliente($nome, $cpf, $endereco, $email, $telefone)
    {
        $this->nome =  $nome;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
        $this->email = $email;
        $this->telefone = $telefone;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    
    public function getCpf()
    {
        return $this->cpf;
    }
    
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getTelefone()
    {   
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

}

?>