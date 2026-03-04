<?php

function fatorial($num) {

$fator = 1;

for ($i=1; $i <= $num; $i++) { 
    $fator = $fator * $i;
}

    return $fator;
}

do {
    $num = readline("Informe um numero para saber o seu fatorial: ");

echo fatorial($num) . " é o resutado do fatorial";
} while ($num < 1);