<?php

function Circulo($raio){

    return $raio * $raio * 3.14;

}

function Circunferencia($raio){

    return $raio * 2 * 3.14;

}

$Raio = readline("Qual é o raio do circulo? ");

echo Circulo($Raio) . " é a area do circulo \n" . Circunferencia($Raio) . " é a circunferencia do circulo.";