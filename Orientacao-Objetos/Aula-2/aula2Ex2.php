<?php

$total = 0;

do {
    $valor = readline("Quanto tu podera investir: ");
    $total = $total + $valor;
} while ($valor != 0);

echo "Total: " . $total;