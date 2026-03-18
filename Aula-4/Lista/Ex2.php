<?php

$palavras = [];
$copiaPalavras = [];

for ($i=0; $i < 5; $i++) { 
    $palavras[] = readline("Informe uma palavra: ");
}

foreach ($palavras as $palavra) {
    $copiaPalavras[] = $palavra;
}

echo implode(", " , $copiaPalavras);