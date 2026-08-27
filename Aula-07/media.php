<?php

class MediaAluno {

    private $aluno;
    private $nota1;
    private $nota2;

    public function Media()
    {
        $media = ($this->nota1 + $this->nota2)/2;
        return $media;
    }

    public function getAluno()
    {
        return $this->aluno;
    }

    public function setAluno($aluno): self
    {
        $this->aluno = $aluno;

        return $this;
    }

    public function getNota1()
    {
        return $this->nota1;
    }

    public function setNota1($nota1): self
    {
        $this->nota1 = $nota1;

        return $this;
    }

    public function getNota2()
    {
        return $this->nota2;
    }

    public function setNota2($nota2): self
    {
        $this->nota2 = $nota2;

        return $this;
    }
}
    
$aluno1 = new MediaAluno();
$aluno1->setAluno("João");
$aluno1->setNota1(7);
$aluno1->setNota2(8);

$aluno2 = new MediaAluno();
$aluno2->setAluno("Maria");
$aluno2->setNota1(9);
$aluno2->setNota2(10);

$aluno3 = new MediaAluno();
$aluno3->setAluno("Pedro");
$aluno3->setNota1(6);
$aluno3->setNota2(7);

echo "A média do aluno " . $aluno1->getAluno() . " é: " . $aluno1->Media() . "\n";
echo "A média do aluno " . $aluno2->getAluno() . " é: " . $aluno2->Media() . "\n";
echo "A média do aluno " . $aluno3->getAluno() . " é: " . $aluno3->Media();
