<?php

require_once ('Pais.php');

class Atleta {

    private $nome;
    private $idade;
    private $esporte;
    private Pais $pais;

    public function __construct( $nome,  $idade, $esporte, Pais $pais) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->esporte = $esporte;
        $this->pais = $pais;
    }

    public function __toString()
    {
        return sprintf("%s é atleta do %s, continente %s, possui %d anos e atua no esporte %s.", $this->nome, $this->pais->getNome(), $this->pais->getContinente(), $this->idade, $this->esporte);
    }

    public function getNome(){
        return $this->nome;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function getEsporte(){
        return $this->esporte;
    }

    public function getPais(): Pais {
        return $this->pais;
    }

}
