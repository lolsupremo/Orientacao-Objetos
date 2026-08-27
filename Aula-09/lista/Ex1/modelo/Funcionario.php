<?php

require_once ('Departamento.php');

class Funcionario {
    private $nome;
    private $cargo;
    private $salario;
    private Departamento $departamento;

    public function __construct($nome, $salario, $cargo, Departamento $departamento) {
        $this->nome = $nome;
        $this->salario = $salario;
        $this->cargo = $cargo;
        $this->departamento = $departamento;
    }

    public function __toString()
    {
        return sprintf("Nome: %s\nCargo: %s\nSalário: %s\nDepartamento: %s\nNúmero da Sala: %s\n", $this->nome, $this->cargo, $this->salario, $this->departamento->getNome(), $this->departamento->getNumSala());
    }
    public function getNome() {
        return $this->nome;
    }

    public function getCargo() {
        return $this->cargo;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function getDepartamento() {
        return $this->departamento;
    }
}