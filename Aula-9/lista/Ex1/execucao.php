<?php

require_once('modelo/Funcionario.php');
require_once('modelo/Departamento.php');

$funcionarios = [];

for ($i = 0; $i < 5; $i++) {
    $nome = readline("Digite o nome do funcionário: ");
    $salario = readline("Digite o salário do funcionário: ");
    $cargo = readline("Digite o cargo do funcionário: ");
    $departamentoNome = readline("Digite o nome do departamento: ");
    $departamentoNumSala = readline("Digite o número da sala do departamento: ");

    $departamento = new Departamento($departamentoNome, $departamentoNumSala);
    $funcionario = new Funcionario($nome, $salario, $cargo, $departamento);

    $funcionarios[] = $funcionario;
}

foreach ($funcionarios as $funcionario) {
    echo $funcionario;
    echo "------------------------\n";
}
