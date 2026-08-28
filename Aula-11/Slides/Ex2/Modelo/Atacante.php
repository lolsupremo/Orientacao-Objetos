<?php

require_once "Jogador.php";

class Atacante extends Jogador 
{
    private $velocidade;
    public function __construct($nome, $idade, $nacionalidade, $velocidade) {
        $this->velocidade = $velocidade;
        $this->nome = $nome;
        $this->idade = $idade;
        $this->nacionalidade = $nacionalidade;
    }

    public function fazerGol() {
        echo $this->nome . " Chutou a Gol e marcou.\n";
    }

    public function getVelocidade() {
        return $this->velocidade;
    }
}
