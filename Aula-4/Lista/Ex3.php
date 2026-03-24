<?php
$A = [1, 3, 5, 7, 9];
$B = [5, 2, 8, 1, 4];

$C = [];
foreach ($A as $valorA) {
    foreach ($B as $valorB) {
        if ($valorA == $valorB) {
            $C[] = $valorA;
            break;
        }
    }
}


$D = $A;
foreach ($B as $valorB) {
    $existeEmA = false;
    foreach ($A as $valorA) {
        if ($valorB == $valorA) {
            $existeEmA = true;
            break;
        }
    }
    if (!$existeEmA) {
        $D[] = $valorB;
    }
}

echo "Vetor A: " . implode(", ", $A) . "\n";
echo "Vetor B: " . implode(", ", $B) . "\n\n";

echo "Vetor C (Intersecção): ";
if (empty($C)){
	echo "Vazio";
}else{
	echo implode(", ", $C)) . "\n";
}
echo "Vetor D (União): " . implode(", ", $D) . "\n";
