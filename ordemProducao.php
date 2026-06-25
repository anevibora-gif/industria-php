<?php

class OrdemProducao
{
    private $numero;
    private $data;
    private $quantidade;

    public function __construct($numero, $data, $quantidade)
    {
        $this->numero = $numero;
        $this->data = $data;
        $this->quantidade = $quantidade;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }
}

?>