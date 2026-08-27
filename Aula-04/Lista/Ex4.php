<?php

$numeros = [];

for ($i = 0; $i < 10; $i++) {

	$numeros = readline("Informe um numero: "); 

}

$maior = $numeros[0];
$menor = $numeros[0];

for ($i = 1; $i < 10; $i++) {

    if ($numeros[$i] > $maior) {
        $maior = $numeros[$i];
    }

    if ($numeros[$i] < $menor) {
        $menor = $numeros[$i];
    }
}

echo "Vetor: " . implode(", ", $numeros) . "\n";
echo "O menor elemento é: " . $menor . "\n";
echo "O maior elemento é: " . $maior . "\n";
