<?php

abstract class Funcionario {
    protected $salario = 2000;
    protected $cargo;
    protected $nome;

    public function __toString()
    {
        $meses = rand(1, 10);
        return "O funcionário " . $this->nome . ", cargo " . $this->cargo . ", possui salário de R$" . $this->salario . " e o salario dele esta atrasado ". $meses ." meses\n";
    }

    public function getSalario() {
        return $this->salario;
    }

    public function getCargo() {
        return $this->cargo;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setSalario($salario) {
        $this->salario = $salario;
    }

    public function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }
}