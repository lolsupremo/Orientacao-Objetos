<?php

require_once 'modelo/Cd.php';
require_once 'modelo/Dvd.php';
require_once 'modelo/Midia.php';

$midias = [];

for ($i=0; $i < 5; $i++) { 
    $tipo = readline("Digite o tipo de mídia (CD ou DVD): ");
    $descricao = readline("Digite a descrição da mídia: ");
    $precoPago = readline("Digite o preço pago pela mídia: ");

    if ($tipo == 'CD') {
        $midias[] = new Cd($descricao, $precoPago);
    } elseif ($tipo == 'DVD') {
        $midias[] = new Dvd($descricao, $precoPago);
    } else {
        $midias[] = new Midia($descricao, $precoPago, "Mídia Genérica");
    }
}

foreach ($midias as $midia) {
    echo $midia->getDados() . "\n";
}