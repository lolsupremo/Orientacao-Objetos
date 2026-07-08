<?php

class Animais
{

    public $patas;
    public $tipoPele;
    public $som;
    public $comoMovimenta;
    public $tamanho;

    function __construct($a, $b, $c, $d, $e) {
        $this->patas = $a;
        $this->tipoPele = $b;
        $this->som = $c;
        $this->comoMovimenta = $d;
        $this->tamanho = $e;

    }

}

$vaca = new Animais(4, "Pelos", "Muuuu", "Anda", "Grande");

$cavalo = new Animais(4, "Pelos", "iiirrrrí", "Anda", "Grande");

$pato = new Animais(2, "Penas", "Quack", "Anda, nada e voa", "Pequeno");

$galinha = new Animais(2, "Penas", "Cocoricó", "Anda e voa", "Pequeno");

$porco = new Animais(4, "Pelos", "Oink", "Anda", "Médio");
