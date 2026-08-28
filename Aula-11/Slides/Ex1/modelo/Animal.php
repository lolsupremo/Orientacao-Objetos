<?php

class Animal {
    protected $nome;
    protected $raca;

    public function __construct($nome, $raca) {
        $this->nome = $nome;
        $this->raca = $raca;
    }
    public function getDados(){

    return "O animal " . $this->nome . " é da raça " . $this->raca;

    }


}