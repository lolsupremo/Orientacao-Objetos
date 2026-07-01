<?php

class livro {
    private $titulo;
    private $autor;
    private $genero;
    private $QntPaginas;
    private $Valor;

    public function __construct($titulo, $autor, $genero, $QntPaginas, $Valor)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->genero = $genero;
        $this->QntPaginas = $QntPaginas;
        $this->Valor = $Valor;
    }

    public function __toString()
    {
        return sprintf("%s, %s, %s, %d, %.2f\n", $this->titulo, $this->autor, $this->genero, $this->QntPaginas, $this->Valor);
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function getGenero()
    {
        return $this->genero;
    }

    public function getQntPaginas()
    {
        return $this->QntPaginas;
    }

    public function getValor()
    {
        return $this->Valor;
    }
}
$livros = [];
while ($escolha != 0) {
    echo "Escolha uma opção:\n";
    echo "1. Inserir livro\n";
    echo "2. Listar livros\n";
    echo "3. Buscar livro\n";
    echo "4. Total gasto com livros\n";
    echo "0. Sair\n";
    $escolha = readline();
    system ("clear");
    switch ($escolha) {
        case 1:
            $titulo = readline("Digite o título do livro: ");
            $autor = readline("Digite o autor do livro: ");
            $genero = readline("Digite o gênero do livro: ");
            $QntPaginas = readline("Digite a quantidade de páginas do livro: ");
            $Valor = readline("Digite o valor do livro: ");
            $livro = new livro($titulo, $autor, $genero, $QntPaginas, $Valor);
            $livros[] = $livro;
            break;
        case 2:
            if (count($livros) == 0) {
                echo "Nenhum livro cadastrado.\n";
            } else {
                echo "Livros cadastrados:\n";
                for ($i=0; $i < count($livros); $i++) { 
                    echo "Livro " . ($i + 1) . ": " . $livros[$i];
                }
            }
            break;
        case 3:
            $indice = readline("Digite o índice do livro a ser buscado: ");
            if ($indice >= 0 && $indice < count($livros)) {
                echo "Livro encontrado: " . $livros[$indice-1];
            } else {
                echo "Índice inválido.\n";
            }
            break;

        case 4:
            $totalGasto = 0;
            foreach ($livros as $livro) {
                $totalGasto += $livro->getValor();
            }
            echo "Total gasto com livros: R$ " . $totalGasto . " \n";
            break;
        case 0:
            echo "Saindo...\n";
            break;
        default:
            echo "Opção inválida.\n";
    }
}
