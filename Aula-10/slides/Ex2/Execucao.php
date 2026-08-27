<?php

require_once("modelo/Residencial.php");
require_once("modelo/Comercial.php");
require_once("modelo/Industrial.php");

echo "Qual é o seu perfil consumidor\n";
echo "1- Residencial\n";
echo "2- Comercial\n";
echo "3- Industrial\n";

$opcao = readline("");
$lado = readline("Informe o seu consumo: ");
$perfil = null;
if($opcao == 1) {
    $perfil = new Residencial($lado);
} else if($opcao == 2) {
    $perfil = new Comercial($lado);
} else if($opcao == 3) {
    $perfil = new Industrial($lado);
}

echo "Consumo: " . $perfil->consumirEnergia();