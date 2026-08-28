<?php

class Jogador 
{
    protected $nome;
    protected $idade;
    protected $nacionalidade;


    public function Correr() {
        echo $this->nome . " está correndo.\n";

    }

    public function Chutar() {
        echo $this->nome . " chutou.\n";
    }
    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }
}