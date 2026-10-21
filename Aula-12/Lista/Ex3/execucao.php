<?php

require_once('modelo/Soma.php');
require_once('modelo/Subtracao.php');
require_once('modelo/Multiplicacao.php');
require_once('modelo/Divisao.php');
require_once('modelo/Modulo.php');


do {


    $num1 = readline("Digite o primeiro número: ");
    $num2 = readline("Digite o segundo número: ");

    echo "Escolha a operação desejada:
1 - Soma
2 - Subtração
3 - Multiplicação
4 - Divisão
5 - Módulo";

    $escolha = readline();

    switch ($escolha) {
        case 1:
            $soma = new Soma($num1, $num2);
            echo "Resultado da soma: " . $soma->calcular() . "\n";
            break;
        case 2:
            $subtracao = new Subtracao($num1, $num2);
            echo "Resultado da subtração: " . $subtracao->calcular() . "\n";
            break;
        case 3:
            $multiplicacao = new Multiplicacao($num1, $num2);
            echo "Resultado da multiplicação: " . $multiplicacao->calcular() . "\n";
            break;
        case 4:
            if ($num2 == 0) {
                echo "Erro: Divisão por zero não é permitida.\n";
            } else {
                $divisao = new Divisao($num1, $num2);
                echo "Resultado da divisão: " . $divisao->calcular() . "\n";
            }
            break;
        case 5:
            if ($num2 == 0) {
                echo "Erro: Módulo por zero não é permitido.\n";
            } else {
                $modulo = new Modulo($num1, $num2);
                echo "Resultado do módulo: " . $modulo->calcular() . "\n";
            }
            break;
        default:
            echo "Opção inválida. Tente novamente.\n";
    }
} while ($num1 == 0 and $num2 == 0);
