<?php

$retangulos = [];

function area($retangulo)
{
    $area = $retangulo['altura'] * $retangulo['base'];
    return $area;
}

for ($i = 0; $i < 5; $i++) {
    $num1 = readline("Informe a altura do retangulo: ");

    $num2 = readline("Informe a base do mesmo retangulo: ");


    $retangulos[] =  array(
        "altura" => $num1,
        "base" => $num2
    );
}
echo "A area dos triangulos informados é: "; 

foreach ($retangulos as $retangulo) {
   echo area($retangulo) . ", ";
}

