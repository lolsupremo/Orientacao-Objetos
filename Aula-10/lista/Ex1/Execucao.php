<?php

require_once("modelo/Goku.php");
require_once("modelo/Gohan.php");
require_once("modelo/Freeza.php");

echo "Escolha um guerreiro: \n";
echo "1. Goku\n";
echo "2. Gohan\n";
echo "3. Freeza\n";

$opcao = readline("Digite o número do guerreiro: ");

if ($opcao == 1) {
    $guerreiro = new Goku();
} else if ($opcao == 2) {
    $guerreiro = new Gohan();
} else if ($opcao == 3) {
    $guerreiro = new Freeza();
} else {
    echo "Opção inválida!";
    exit;
}
$fase = 0;
do {
    echo "O que deseja fazer? \n";
    echo "1. Atacar\n";
    echo "2. Transformar\n";
    echo "3. Sair\n";

    $opcao = readline("Digite o número da opção: ");

    if ($opcao == 1) {
        echo $guerreiro->ataque() . "\n";
    } else if ($opcao == 2) {
        $fase =+ 1;
        echo $guerreiro->transformacao($fase) . "\n";
    } else if ($opcao == 3) {
        echo "Saindo...\n";
    } else {
        echo "Opção inválida!\n";
    }
} while ($opcao != 3);
