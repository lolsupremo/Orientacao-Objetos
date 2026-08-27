<?php

$numero = (int) readline("Informe um numero: ");

if ($numero > 0 ) {
    $numero = $numero * 2;
    echo $numero;
}else {
   $numero = $numero * 3;
   echo $numero;
}