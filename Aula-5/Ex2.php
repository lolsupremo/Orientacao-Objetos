<?php

function Soma($x)
{
    $soma = 0;

    foreach ($x as $value) {
        $soma = $soma + $value;
    }
    return $soma;
}

function Pares($x)
{
    $pares = 0;
    foreach ($x as $value) {
        if ($value % 2 == 0) {
            $pares++;
        }
    }
    return $pares;
}

function Impares($x)
{
    $impares = 0;
    foreach ($x as $value) {
        if ($value % 2 == 1) {
            $impares++;
        }
    }
    return $impares;
}

function Div5($x)
{
    $div5 = 0;
    foreach ($x as $value) {
        if ($value % 5 == 0) {
            $div5++;
        }
    }
    return $div5;
}

function DificencaMenorMaior($x)
{
    $Maior = $x[0];
    $Menor = $x[0];

    for ($i = 1; $i < count($x); $i++) {
        if ($x[$i] > $Maior) {
            $Maior = $x[$i];
        }
    }

    for ($i = 1; $i < count($x); $i++) {
        if ($x[$i] < $Menor) {
            $Menor = $x[$i];
        }
    }
    return $Maior - $Menor;
}

function ContagemNum369($x){
    $num369 = 0;
    foreach ($x as $value) {
        if ($value == 3) {
            $num369++;
        }
        if ($value == 6) {
            $num369++;
        }
        if ($value == 9) {
            $num369++;
        }
    }
    return $num369;
}
$numeros = [];
do {
    $num = readline("Informe um numero: ");
    if ($num > 0) {
        $numeros[] = $num;
    }
} while ($num <= 0);

echo "A soma de todos é: " . Soma($numeros) . "\n";
echo "A quantidade de pares é: " . Pares($numeros) . "\n";
echo "A quantidade de impares é: " . Impares($numeros) . "\n";
echo "A quantidade de numeros divisivel por 5 é: " . Div5($numeros) . "\n";
echo "A Diferença do maior numero para o menor é: " . DificencaMenorMaior($numeros) . "\n";
echo "A quantidade de numeros 3, 6 e 9 é: " . ContagemNum369($numeros) . "\n";
