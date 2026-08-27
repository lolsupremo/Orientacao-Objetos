<?php

require_once ("classes/Turma.php");
require_once ("classes/Aluno.php");

$turma1 = new Turma("Turma A", "Curso de PHP");

for ($i=0; $i < 5; $i++) { 
    $nome = readline("Digite o nome do aluno: ");
    $idade = readline("Digite a idade do aluno: ");

    $aluno = new Aluno($nome, $idade, $turma1);
    $turma1->addAluno($aluno);
}

echo $turma1;

foreach ($turma1->getAlunos() as $aluno) {
    echo $aluno . "\n";
}