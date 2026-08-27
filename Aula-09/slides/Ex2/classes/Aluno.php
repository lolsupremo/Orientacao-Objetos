<?php

require_once ("Turma.php");

class Aluno {

    private string $nome;
    private int $idade;
    private Turma $turma;


    public function __toString()
    {
        
        return sprintf("Nome: %s, Idade: %d", $this->nome, $this->idade);
    }
    public function __construct($nome, $idade, Turma $turma)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->turma = $turma;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getIdade(): int
    {
        return $this->idade;
    }

    public function setIdade(int $idade): self
    {
        $this->idade = $idade;

        return $this;
    }

    public function getTurma(): Turma
    {
        return $this->turma;
    }
}
