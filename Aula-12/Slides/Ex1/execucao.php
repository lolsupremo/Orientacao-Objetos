<?php

require_once '/modelo/Produto.php';
require_once '/modelo/Computador.php';
require_once '/modelo/Livro.php';
require_once '/modelo/Balde.php';

$produto = new Produto();
$produto->setDescricao("Produto Genérico");
$produto->setUnidadeMedida("Unidade");
echo $produto->getDados() . "\n";

$computador = new Computador();
$computador->setDescricao("Computador");
$computador->setUnidadeMedida("Unidade");
$computador->setProcessador("Intel i7");
$computador->setMemoria("16GB");
echo $computador->getDados() . "\n";

$livro = new Livro();
$livro->setDescricao("Livro");
$livro->setUnidadeMedida("Unidade");
$livro->setAutor("João da Silva");
echo $livro->getDados() . "\n";

$balde = new Balde();
$balde->setDescricao("Balde");
$balde->setUnidadeMedida("Unidade");
$balde->setCapacidade("10L");
echo $balde->getDados() . "\n";