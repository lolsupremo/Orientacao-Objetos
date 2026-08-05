<?php 

class Fabricante {
    private $nome;
    private $sigla;

    public function __construct($nome, $sigla) {
        $this->nome = $nome;
        $this->sigla = $sigla;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getSigla() {
        return $this->sigla;
    }
}




?>