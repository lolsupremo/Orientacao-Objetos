<?php

require_once ("Aluno.php");

class Turma {

    private string $nome;
    private string $curso;

    private array $alunos = [];

    public function __toString()
    {
        return sprintf("Nome: %s, Curso: %s", $this->nome, $this->curso);
    }

    public function __construct($nome, $curso)
    {
        $this->nome = $nome;
        $this->curso = $curso;
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

    public function getCurso(): string
    {
        return $this->curso;
    }

    public function setCurso(string $curso): self
    {
        $this->curso = $curso;

        return $this;
    }

    public function getAlunos(): array
    {
        return $this->alunos;
    }

    public function addAluno(Aluno $aluno): self
    {
        $this->alunos[] = $aluno;

        return $this;
    }

}