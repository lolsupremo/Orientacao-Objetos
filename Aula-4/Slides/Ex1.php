<?php

$pokemonG1 = array("Charmander","Pikachu", "Raichu", "Zaptos", "Psyduck");
$pokemonG2 = array("Totodile", "Cyndaquil", "Chikorita", "Togepi", "Tyranitar");
$pokemonG3 = array("Sceptile","Blaziken", "Swampert", "Gardevoir", "Salamence");
$pokemonG4 = array("Infernape", "Lucario", "Garchomp", "Luxray", "Torterra");
$pokemonG5 = array("Snivy","Tepig", "Oshawott", "Zoroark", "Hydreigon");


echo "Pokemon gen 1: ";
foreach ($pokemonG1 as $value) {
    echo $value . " | ";
}
echo "\n";

echo "Pokemon gen 2: ";
foreach ($pokemonG2 as $value) {
    echo $value . " | ";
}
echo "\n";

echo "Pokemon gen 3: ";
foreach ($pokemonG3 as $value) {
    echo $value . " | ";
}
echo "\n";

echo "Pokemon gen 4: ";
foreach ($pokemonG4 as $value) {
    echo $value . " | ";
}
echo "\n";

echo "Pokemon gen 5: ";
foreach ($pokemonG5 as $value) {
    echo $value . " | ";
}
echo "\n";