<?php

require_once('modelo/Atleta.php');
require_once('modelo/Pais.php');

$atletas = [];
$escolha = -1;
while ($escolha != 0) {
    echo "Escolha uma opção:\n";
    echo "1. Cadastrar atleta\n";
    echo "2. Excluir atleta\n";
    echo "3. Listar Atletas\n";
    echo "0. Sair\n";

    $escolha = readline();
    system("clear");
    switch ($escolha) {
        case 1:
            $nome = readline("Digite o nome do atleta: ");
            $idade = readline("Digite a idade do atleta: ");
            $esporte = readline("Digite o esporte do atleta: ");
            $paisNome = readline("Digite o nome do país do atleta: ");
            $paisContinente = readline("Digite o continente do país do atleta: ");
            $pais = new Pais($paisNome, $paisContinente);
            $atletas[] = new Atleta($nome, $idade, $esporte, $pais);
            echo "Atleta cadastrado com sucesso!\n";
            break;
        case 2:
            if (count($atletas) == 0) {
                echo "Nenhum atleta cadastrado.\n";
            } else {
                for ($i = 0; $i < count($atletas); $i++) {
                    echo ($i + 1) . ". " . $atletas[$i]->getNome() . "\n";
                }
                $indice = readline("Digite o número do atleta que deseja excluir: ");
                if ($indice > 0 && $indice <= count($atletas)) {
                    array_splice($atletas, $indice - 1, 1);
                    echo "Atleta excluído com sucesso!\n";
                } else {
                    echo "Índice inválido.\n";
                }
            }
            break;

        case 3:
            if (count($atletas) == 0) {
                echo "Nenhum atleta cadastrado.\n";
            } else {
                for ($i = 0; $i < count($atletas); $i++) {
                    echo ($i + 1) . ". " . $atletas[$i] . "\n";
                }
            }
            break;
        case 0:
            echo "Saindo...\n";
            break;
        default:
            echo "Opção inválida. Tente novamente.\n";
            break;
    }
}
