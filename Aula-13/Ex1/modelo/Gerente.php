<?php

require_once  __DIR__ . "/Funcionario.php";

class Gerente extends Funcionario {

    public function __construct($nome)
    {
        $this->salario = parent::getSalario() * 4.5;
        $this->cargo = "Gerente";
        $this->nome = $nome;
    }

}