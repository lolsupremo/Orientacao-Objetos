<?php

require_once "Jogador.php";

class Goleiro extends Jogador 
{
    private $altura;
    public function __construct($nome, $idade, $nacionalidade, $altura) {
        $this->altura = $altura;
        $this->nome = $nome;
        $this->idade = $idade;
        $this->nacionalidade = $nacionalidade;
    }

    public function defender() {
        echo $this->nome . " defendeu o chute a gol.\n";
    }

    public function getAltura() {
        return $this->altura;
    }
}
