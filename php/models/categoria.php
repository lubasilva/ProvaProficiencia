<?php

class Categoria{
    #nome da categoria
    protected $nome_categoria;
    #código da categoria
    protected $codg_categoria;
    #Descrição da categoria
    private $desc_categoria;




    public function Categoria($nome_categoria, $codg_categoria, $desc_categoria)
    {
        $this->nome_categoria = $nome_categoria;
        $this->codg_categoria = $codg_categoria;
        $this->desc_categoria = $desc_categoria;
    }

    public function getNomeCategoria()
    {
        return $this->nome_categoria;
    }

    public function setNomeCategoria($nome_categoria)
    {
        $this->nome_categoria = $nome_categoria;
    }
    public function getCodgCategoria()
    {
        return $this->$codg_categoria;
    }

    public function setCodgCategoria($codg_categoria)
    {
        $this->codg_categoria =  $codg_categoria;
    }
    public function getDescCategoria()
    {
        return $this->desc_categoria;
    }

    public function setDescCategoria($desc_categoria)
    {
        $this->desc_categoria = $desc_categoria;
    }

}

?>