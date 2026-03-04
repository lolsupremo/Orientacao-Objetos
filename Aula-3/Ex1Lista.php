<?php

function funcao($x){

    $Y = 5*$x + 2*$x + 3;

    return $Y;
}

for ($i=0; $i < 5; $i++) { 
    $x = readline("Informe um numero para descobrir o Y dele na função: ");
    echo funcao($x) . " é o resutado da funçãon\n";
}