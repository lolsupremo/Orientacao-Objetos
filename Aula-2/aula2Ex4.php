<?php

$par = 0;

$impar = 0;

for ($i=0; $i < 10; $i++) { 
    $n = readline("infome um numero: ");
    if ($n%2 == 0) {
        $par++;
    }else {
        $impar++;
    }
}

echo $par . " pares e " . $impar . " impares.";