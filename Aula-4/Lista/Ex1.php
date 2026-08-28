<?php

$numeros = array();
$media = 0;
for ($i=0; $i < 10; $i++) { 
    $numeros[] = readline("Me infome um numero: ");
}
foreach ($numeros as  $value) {
    $media = $media + $value;
}

print $media/10 . " é a media dos numeros informados";