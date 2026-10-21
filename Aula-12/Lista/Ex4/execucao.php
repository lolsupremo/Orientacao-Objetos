<?php

require_once "modelo/Van.php";
require_once "modelo/MicroOnibus.php";
require_once "modelo/Onibus.php";
require_once "modelo/Carro.php";

$carro = new Carro();
$van = new Van();
$microOnibus = new MicroOnibus();
$onibus = new Onibus();

echo "escolha o veículo que deseja alugar:
1 - Carro
2 - Van
3 - Micro-ônibus
4 - Ônibus
";

$escolha = readline();

switch ($escolha) {
    case 1:
        $veiculo = $carro;
        break;
    case 2:
        $veiculo = $van;
        break;
    case 3:
        $veiculo = $microOnibus;
        break;
    case 4:
        $veiculo = $onibus;
        break;
    default:
        echo "Opção inválida!";
        exit();
}

$distancia = readline("Digite a distância da viagem em km: ");

$valorTotal = $veiculo->calcularPrecoViagem($distancia);

echo "O veículo " . $veiculo->getTipoVeiculo() . ", foi alugado por R$ " . $veiculo->getTarifaKm() . ", rodou " . $distancia . " quilômetros com custo total de R$ " . $valorTotal . ". ";