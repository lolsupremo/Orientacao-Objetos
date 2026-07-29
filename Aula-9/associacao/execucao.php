<?php

require_once ('modelo/Jogador.php');
require_once ('modelo/Pais.php');

$pais = new Pais();
$pais->setNome("Brasil");
$pais->setContinente("América do Sul");
$pais->setTitulos(5);
print_r($pais);

$jogador = new Jogador();
$jogador->setNome("Neymar");
$jogador->setPosicao("Atacante");
$jogador->setNumero(10);
$jogador->setPais($pais);
print_r($jogador);