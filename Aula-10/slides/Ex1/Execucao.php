<?php

require_once("modelo/Quadrado.php");
require_once("modelo/Retangulo.php");
require_once("modelo/Circulo.php");

echo "1- Quadrado\n";
echo "2- Retângulo\n";
echo "3- Círculo\n";

$opcao = readline("Informe a forma desejada: ");

$forma = null;
if($opcao == 1) {
    $lado = readline("Informe o lado: ");
    $forma = new Quadrado($lado);

} else if($opcao == 2) {
    $base = readline("Informe a base: ");
    $altura = readline("Informe a altura: ");
    $forma = new Retangulo($base, $altura);

} else if($opcao == 3) {
    $raio = readline("Informe o raio: ");
    $forma = new Circulo($raio);
} 

echo "Área: " . $forma->getArea() . "\n";
echo "Desenho: " . $forma->getDesenho() . "\n";