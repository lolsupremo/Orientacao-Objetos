<?php

$paises = [];
for($i = 0; $i < 5; $i++){

	$nome = readline("informe o nome do pais: ");
	$continente = readline("informe o continente do pais: ");
	$habitantes = (int)readline("informe a quantidade de habitantes: ");

	$axi = array('pais' => $nome, 'continente' => $continente, 'habitantes' => $habitantes);

	$paises[$i] = $axi;
}

foreach($paises as $pais){

echo $pais['pais'] . " - ";
echo $pais['continente'] . " - ";
echo $pais['habitantes'];

echo "\n";

}
$soma = 0;
foreach($paises as $pais){

	$soma = $soma + $pais['habitantes'];

}

echo "A soma dos habitantes de todos os paises é: " . $soma;
