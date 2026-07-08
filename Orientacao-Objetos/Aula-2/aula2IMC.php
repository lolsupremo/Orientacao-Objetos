<?php

$valores[] =
    $s = 1;

for ($i = 1; $i < 6; $i++) {

    $valores[$s]  = readline("Informe seu nome: ");
    $s++;
    $peso = readline("Informe seu peso: ");
    $valores[$s] = $peso;
    $s++;
    $altura = readline("Informe sua altura: ");
    $valores[$s] = $altura;
    $s++;
    $valores[$s] =  $peso / ($altura / 100 * $altura / 100);
    $s++;
}
for ($i = 01; $i < 21; $i++) {
    echo "Nome: $valores[$i], Peso: " . $valores[$i + 1] . " Altura: " . $valores[$i + 2] . " IMC: " . $valores[$i + 3] . "\n";
    $i = $i + 3;
}
