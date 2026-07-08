<?php

$numero = [];

for ($i=1; $i < 11 ; $i++) { 
    $numero[$i] = (int) trim(readline("infome o $i ° numero: "));
    echo "\n";
}

for ($j=1; $j < 11 ; $j++) { 
    if ($numero[$j] >= 0) {
        echo "O $j ° e positivo";
        echo "\n";
    } else {
        echo "O $j ° e negativo";
        echo "\n";
    }
    
}
