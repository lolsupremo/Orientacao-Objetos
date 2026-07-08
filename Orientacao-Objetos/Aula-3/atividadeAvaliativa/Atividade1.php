<?php

function primos($numero)
{
    if ($numero % 2 == 0) {
        if ($numero == 2) {
            return true;
        }
    } else {
        $Div2 = ($numero + 1) / 2;
        for ($i = $Div2; $i >= 2; $i--) {
            if ($numero % $i == 0) {
                return false;
            }
        }
        return true;
    }

    return false;
}
do {
    $numero = readline("digite um numero para saber se ele é primo: ");


    if ($numero > 1) {
        if (primos($numero)) {
            echo "Seu numero é primo\n";
        } else {
            echo "Seu numero não é primo\n";
        }
    }
} while ($numero > 1);
