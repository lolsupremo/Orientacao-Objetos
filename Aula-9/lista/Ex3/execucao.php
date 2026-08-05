<?php

require_once('modelo/Fabricante.php');
require_once('modelo/Carro.php');

$fabricante = new Fabricante("Chevrolet", "GM");

$carros = [];
$escolha = -1;
while ($escolha != 0) {
    echo "Escolha uma opção:\n";
    echo "1. Cadastrar carro\n";
    echo "2. Excluir carro\n";
    echo "3. Listar Carros\n";
    echo "0. Sair\n";

    $escolha = readline();
    system("clear");
    switch ($escolha) {
        case 1:
            $modelo = readline("Digite o modelo do carro: ");
            $ano = readline("Digite o ano do carro: ");
            $fabricanteSigla = readline("Digite a sigla do fabricante do carro (VW, GM, F, RN): ");
            switch (strtoupper($fabricanteSigla)) {
                case "VW":
                    $fabricante = new Fabricante("Volkswagen", "VW");
                    break;
                case "GM":
                    $fabricante = new Fabricante("Chevrolet", "GM");
                    break;
                case "F":
                    $fabricante = new Fabricante("Fiat", "F");
                    break;
                case "RN":
                    $fabricante = new Fabricante("Renault", "RN");
                    break;
                default:
                    echo "Fabricante inválido.\n";
                    break;
            }
            $carros[] = new Carro($modelo, $ano, $fabricante);
            echo "Carro cadastrado com sucesso!\n";
            break;
        case 2:
            if (count($carros) == 0) {
                echo "Nenhum carro cadastrado.\n";
            } else {
                for ($i = 0; $i < count($carros); $i++) {
                    echo ($i + 1) . ". " . $carros[$i]->getModelo() . " (" . $carros[$i]->getAno() . ")\n";
                }
                $indice = readline("Digite o número do carro que deseja excluir: ");
                if ($indice > 0 && $indice <= count($carros)) {
                    array_splice($carros, $indice - 1, 1);
                    echo "Carro excluído com sucesso!\n";
                } else {
                    echo "Índice inválido.\n";
                }
            }
            break;

        case 3:
            if (count($carros) == 0) {
                echo "Nenhum carro cadastrado.\n";
            } else {
                $indice = 1;
                for ($i = 0; $i < count($carros); $i++) {
                    if ($carros[$i]->getFabricante()->getSigla() == "VW") {
                        echo $indice . ". " . $carros[$i] . "\n";
                        $indice++;
                    }
                }
                for ($i = 0; $i < count($carros); $i++) {
                    if ($carros[$i]->getFabricante()->getSigla() == "F") {
                        echo $indice . ". " . $carros[$i] . "\n";
                        $indice++;
                    }
                }
                for ($i = 0; $i < count($carros); $i++) {
                    if ($carros[$i]->getFabricante()->getSigla() == "GM") {
                        echo $indice . ". " . $carros[$i] . "\n";
                        $indice++;
                    }
                }
                for ($i = 0; $i < count($carros); $i++) {
                    if ($carros[$i]->getFabricante()->getSigla() == "RN") {
                        echo $indice . ". " . $carros[$i] . "\n";
                        $indice++;
                    }
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
