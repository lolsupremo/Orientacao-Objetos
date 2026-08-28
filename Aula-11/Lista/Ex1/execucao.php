<?php

require_once("modelo/CarroPassageiros.php");
require_once("modelo/Caminhao.php");
require_once("modelo/Onibus.php");

$carro1 = new CarroPassageiros("Sedan", 200, "Prata", 5);
$caminhao1 = new Caminhao("Caminhão", 120, "Vermelho", 1000, 3);
$onibus1 = new Onibus("Ônibus", 100, "Amarelo", 5000, 40);

echo $carro1;
echo $caminhao1;
echo $onibus1;