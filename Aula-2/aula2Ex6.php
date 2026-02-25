<?php

$n1 = readline("Infome um numero: ");

$n2 = readline("Infome um numero: ");

for ($i=$n1; $i <= $n2 ; $i++) { 
    if ($i % 5 == 0) {
        echo $i . "\n";
    }
}