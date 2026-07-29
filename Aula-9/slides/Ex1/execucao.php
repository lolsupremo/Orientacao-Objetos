<?php

require_once ("classes/Estado.php");
require_once ("classes/Cidade.php");

$parana = new Estado();
$parana->setNome("Paraná");
$parana->setSigla("PR");

$santaCatarina = new Estado();
$santaCatarina->setNome("Santa Catarina");
$santaCatarina->setSigla("SC");

$cidades = [];

$cascavel = new Cidade();
$cascavel->setNome("Cascavel");
$cascavel->setQtdHabitantes(300000);
$cascavel->setAltitude(250);
$cascavel->setEstado($parana);
$cidades[] = $cascavel;

$fozDoIguacu = new Cidade();
$fozDoIguacu->setNome("Foz do Iguaçu");
$fozDoIguacu->setQtdHabitantes(250000);
$fozDoIguacu->setAltitude(150);
$fozDoIguacu->setEstado($parana);
$cidades[] = $fozDoIguacu;

$blumenau = new Cidade();
$blumenau->setNome("Blumenau");
$blumenau->setQtdHabitantes(350000);
$blumenau->setAltitude(200);
$blumenau->setEstado($santaCatarina);
$cidades[] = $blumenau;

$florianopolis = new Cidade();
$florianopolis->setNome("Florianópolis");
$florianopolis->setQtdHabitantes(500000);
$florianopolis->setAltitude(5);
$florianopolis->setEstado($santaCatarina);
$cidades[] = $florianopolis;

foreach ($cidades as $cidade) {
    echo "A cidade de " . $cidade->getNome() . ", localizada no estado " . $cidade->getEstado()->getNome() . "-" . $cidade->getEstado()->getSigla() . ", possui " . $cidade->getQtdHabitantes() . " habitantes e uma altitude de " . $cidade->getAltitude() . " metros.";
}