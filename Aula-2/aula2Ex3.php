<?php

$n1 = readline("Infome um numero: ");

$n2 = readline("Infome um numero: ");

$n3 = readline("Infome um numero: ");

if ($n1 > $n2 and $n2 > $n3) {
    echo "O maior numero é: " . $n1;
}

if ($n1 < $n2 and $n2 > $n3) {
    echo "O maior numero é: " . $n2;
}

if ($n1 < $n2 and $n2 < $n3) {
    echo "O maior numero é: " . $n3;
}