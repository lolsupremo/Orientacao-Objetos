<?php

class livro
{

    private $titulo;
    private $autor;
    private $genero;
    private $numeroPaginas;

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }
    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor): self
    {
        $this->autor = $autor;

        return $this;
    }


    public function getGenero()
    {
        return $this->genero;
    }


    public function setGenero($genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    public function getNumeroPaginas()
    {
        return $this->numeroPaginas;
    }

    public function setNumeroPaginas($numeroPaginas): self
    {
        $this->numeroPaginas = $numeroPaginas;

        return $this;
    }
}

$livro1 = new livro();
$livro1->setTitulo("O Senhor dos Anéis");
$livro1->setAutor("J.R.R. Tolkien");
$livro1->setGenero("Fantasia");
$livro1->setNumeroPaginas(1178);

$livro2 = new livro();
$livro2->setTitulo("1984");
$livro2->setAutor("George Orwell");
$livro2->setGenero("Distopia");
$livro2->setNumeroPaginas(328);

$livro3 = new livro();
$livro3->setTitulo("O Pequeno Príncipe");
$livro3->setAutor("Antoine de Saint-Exupéry");
$livro3->setGenero("Fábula");
$livro3->setNumeroPaginas(96);

if($livro1->getNumeroPaginas() > $livro2->getNumeroPaginas()) {
    $maisPaginas = $livro1;
} else {
    $maisPaginas = $livro2;
}

if($maisPaginas->getNumeroPaginas() > $livro3->getNumeroPaginas()) {
    $maisPaginas = $maisPaginas;
} else {
    $maisPaginas = $livro3;
}

echo "O livro com mais páginas é: " . $maisPaginas->getTitulo() . " com " . $maisPaginas->getNumeroPaginas() . " páginas.\n";

