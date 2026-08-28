<?php

require_once "modelo/Cachorro.php";
require_once "modelo/Gato.php";

$cachorro1 = new Cachorro("Rex", "Labrador");
$cachorro2 = new Cachorro("Totó", "Golden Retriever");
$gato1 = new Gato("Mimi", "Siamês");
$gato2 = new Gato("Garfield", "Laranja");

echo $cachorro1->getDados() . $cachorro1->Latir() . "\n";
echo $cachorro2->getDados() . $cachorro2->Latir() . "\n";
echo $gato1->getDados() . $gato1->Miar() . "\n";
echo $gato2->getDados() . $gato2->Miar() . "\n";