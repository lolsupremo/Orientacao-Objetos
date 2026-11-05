<?php

require_once  __DIR__ . "/Funcionario.php";

class Desenvolvedor extends Funcionario {

    public function __construct($nome)
    {
        $this->salario = parent::getSalario() * 2.3;
        $this->cargo = "Desenvolvedor";
        $this->nome = $nome;
    }

}