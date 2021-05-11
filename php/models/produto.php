<?php
require_once 'categoria.php';

class Produto extends Categoria{
    private $codg_produto;
    private $nome_produto;
    private $desc_produto;
    private $valor;



    public function Produto($codg_produto, $nome_produto, $desc_produto, $valor)
    {
        //parent::Categoria();
        $this->codg_produto = $codg_produto;
        $this->nome_produto = $nome_produto;
        $this->desc_produto = $desc_produto;
        $this->valor = $valor;
    }

    public function getCodgProduto()
    {
        return $this->codg_produto;
    }


    public function getNomeProduto()
    {
        return $this->nome_produto;
    }

    public function setNomeProduto($nome_produto)
    {
        $this->nome_produto = $nome_produto;
    }
    public function getDescProduto()
    {
        return $this->desc_produto;
    }

    public function setDescProduto($desc_produto)
    {
        $this->desc_produto = $desc_produto;
    }
    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;
    }


}

?>