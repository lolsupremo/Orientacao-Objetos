<?php

function mediaPonderada($Valor1 , $peso1 , $Valor2 , $peso2 , $Valor3 , $peso3){

return ($Valor1 * $peso1 + $Valor2 * $peso2 + $Valor3 * $peso3) / $peso1 + $peso2 + $peso3;

}

$valor1 = readline("Insira o valor 1 da media ponderada: ");
$peso1 = readline("Insira o peso 1 da media ponderada: ");
$valor2 = readline("Insira o valor 2 da media ponderada: ");
$peso2 = readline("Insira o peso 2 da media ponderada: ");
$valor3 = readline("Insira o valor 3 da media ponderada: ");
$peso3 = readline("Insira o peso 3 da media ponderada: ");

echo mediaPonderada($Valor1 , $peso1 , $Valor2 , $peso2 , $Valor3 , $peso3) . " é o resultado da medai ponderada";