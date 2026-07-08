<?php

$numero = (int) readline("Digite um numero: ");

if ($numero > 0) {
    for ($i=1; $i < $numero; $i++) { 
        $n = 0;
        $n = $numero - $i;
        echo $n . " ";
    }
}else {
    echo "Informe um numero menor que zero";
}