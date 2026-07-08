<?php

function divisaoExata($dividendo, $divisor)
{
    return $dividendo % $divisor == 0;
}

function divisores($dividendo)
{
    $divisores = [];
    for ($i = $dividendo; $i >= 1; $i--) {
        if ($dividendo % $i == 0) {
            $divisores[] = $i;
        }
    }
    echo implode(" ", $divisores) . "\n";
}

do {
    $dividendo = (int)readline("Digite um número inteiro: ");

    if ($dividendo > 1) {
        $escolha = readline("T para todos ou D para verificar um: ");

        if ($escolha == "T") {
            divisores($dividendo);
        } else {
            $divisor = readline("Digite o divisor: ");
            if (divisaoExata($dividendo, $divisor)) {
                echo "É divisível!\n";
            } else {
                echo "Não é divisível.\n";
            }
        }
    }
} while ($dividendo > 1);
