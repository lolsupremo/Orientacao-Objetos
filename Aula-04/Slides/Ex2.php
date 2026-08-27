<?php

$dados = array(
    0 => array(
        "nome" => "Manuel de Medeiros",
        "Endereco" => "Rua das Acácias",
        "Cidade" => "Foz do Iguaçu",
        "UF" => "PR"
    ),
    1 => array(
        "nome" => "Juliana de Amaral",
        "Endereco" => "Rua dos Pinheiros",
        "Cidade" => "Florianópolis",
        "UF" => "SC"
    ),
    2 => array(
        "nome" => "Rodrigo Baidek",
        "Endereco" => "Rua Dom Pedro I",
        "Cidade" => "Petrópolis",
        "UF" => "RJ"
    ),
    3 => array(
        "nome" => "Fabíola da Silva",
        "Endereco" => "Rua Chile",
        "Cidade" => "Guarulhos",
        "UF" => "SP"
    ),


);
echo "Nome | Endereço | Cidade | UF \n";
foreach ($dados as $dado) {
    foreach ($dado as $dadinho) {
        echo $dadinho . " | ";
    }
    echo "\n";
}
