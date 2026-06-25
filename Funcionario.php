<?php

class Funcionario
{
    private $nome;
    private $matricula;
    private $cargo;

    public function __construct($nome, $matricula, $cargo)
    {
        $this->nome = $nome;
        $this->matricula = $matricula;
        $this->cargo = $cargo;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getMatricula()
    {
        return $this->matricula;
    }

    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }

    public function getCargo()
    {
        return $this->cargo;
    }

    public function setCargo($cargo)
    {
        $this->cargo = $cargo;
    }
}

?>