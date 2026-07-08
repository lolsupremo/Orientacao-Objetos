<?php

$dados = array(
    0 => array(
        "nome" => "Manuel de Medeiros",
        "Idade" => 63,
        "Cidade" => "Foz do Iguaçu",
        "Profissao" => "Aposentado"
    ),
    1 => array(
        "nome" => "Juliana de Amaral",
        "Idade" => 12,
        "Cidade" => "Florianópolis",
        "Profissao" => "Estudante"
    ),
    2 => array(
        "nome" => "Rodrigo Baidek",
        "Idade" => 35,
        "Cidade" => "Petrópolis",
        "Profissao" => "Mecanico"
    ),
    3 => array(
        "nome" => "Fabíola da Silva",
        "Idade" => 27,
        "Cidade" => "Guarulhos",
        "Profissao" => "Professor"

$maisVelha = $dados[0];

for ($i = 1; $i < count($dados); $i++) {
    if ($dados[$i]["Idade"] > $maisVelha["Idade"]) {
        $maisVelha = $dados[$i];
    }
}
echo "Os dados da pessoa mais Velha é: " . implode(" | ", $maisVelha);

