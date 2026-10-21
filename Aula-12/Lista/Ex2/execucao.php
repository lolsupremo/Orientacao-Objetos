<?php

require_once ('modelo/Prova.php');
require_once ('modelo/Trabalho.php');
require_once ('modelo/Participacao.php');

$notas = [];


for ($i=0; $i < 3; $i++) {
    
    echo "Qual é o instrumento de avaliação?
    1 - Prova
    2 - Trabalho
    3 - Participação
    ";

    $opcao = readline("Digite a opção: ");

    switch ($opcao) {
        case 1:
            $nota = readline("Digite a nota da prova: ");
            $notas[] = new Prova($nota);
            break;
        case 2:
            $nota = readline("Digite a nota do trabalho: ");
            $notas[] = new Trabalho($nota);
            break;
        case 3:
            $nota = readline("Digite a nota da participação: ");
            $notas[] = new Participacao($nota);
            break;
        default:
            echo "Opção inválida.\n";
            $i-=1;
            break;
    }
}

$mediafinal = 0;

foreach ($notas as $p) {
    $mediafinal += $p->getNota();
}

$mediafinal = $mediafinal / 3;