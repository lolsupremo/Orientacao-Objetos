<?php

require_once  __DIR__ . "/Funcionario.php";

class Estagiario extends Funcionario {

    public function __construct($nome)
    {
        $this->salario = parent::getSalario() * 0.8;
        $this->cargo = "Estagiario";
        $this->nome = $nome;
    }

}