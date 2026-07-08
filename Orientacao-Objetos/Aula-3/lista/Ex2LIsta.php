<?php

function Area($altura, $base) {

 return $altura * $base;
    
}

function Perimetro($altura, $base) {
    
    return 2*($altura + $base);

}

$altura = readline("Qual a altura do retangulo em cm: ");

$base = readline("Qual a base do retangulo em cm: ");

echo Area($altura, $base) . " é a area do retangulo em cm e o perimetro é " . Perimetro($altura, $base) . "  em cm ";