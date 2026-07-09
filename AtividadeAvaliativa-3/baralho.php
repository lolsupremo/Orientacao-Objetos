<?php

class Carta
{
    private $numero;
    private $nome;
    private $dica;
    private $dicaUsada = 0;

    public function __construct($numero, $nome, $dica)
    {
        $this->numero = $numero;
        $this->nome = $nome;
        $this->dica = $dica;
    }

    public function __toString()
    {
    if ($this->numero == -2) {
        return null;
    }    
    return sprintf("%s, %s\n", $this->numero, $this->nome);
    }

    public function getpontuacao($tentativas, $quantidadeCartas)
    {
        return 10 * (($quantidadeCartas - $tentativas) - ($this->dicaUsada * 2));
    }

    public function getDica()
    {
        $this->dicaUsada = 1;
        return $this->dica;
    }
    public function getNumero()
    {
        return $this->numero;
    }

    public function getNome()
    {
        return $this->nome;
    }
}

function testarCartas($cartas)
{       
        $totalCartas = count($cartas);
        $cartaSorteada = $cartas[array_rand($cartas)];
        $quantidadeTentativas = 0;
    do {
        foreach ($cartas as $carta) {
            echo $carta;
        }
        echo "Digite 0 para desistir ou -1 para receber uma dica.\n";
        $cartaEscolhida = readline("Escolha o numero de uma carta : ");

        if ($cartaEscolhida == $cartaSorteada->getNumero()) {
            echo "Parabéns! Você acertou a carta sorteada: " . $cartaSorteada->getNome() . "\n";
        } elseif ($cartaEscolhida == 0) {
            echo "Você desistiu do jogo.\n";
            break;
        } elseif ($cartaEscolhida == -1) {
            echo "Dica: " . $cartaSorteada->getDica() . "\n";
        } else {
            echo "Que pena! voce errou a carta sorteada, tente novamente!\n";
            for ($i = 0; $i < $totalCartas; $i++) {
                if ($cartas[$i]->getNumero() == $cartaEscolhida) {
                    $cartas[$i] = new Carta(-2, null, null);
                }
            }
            $quantidadeTentativas++;
        }

        sleep(3);
        system("clear");
    } while ($cartaEscolhida != $cartaSorteada->getNumero());
    echo "Voce ganhou um total de pontos: " . $cartaSorteada->getpontuacao($quantidadeTentativas, $totalCartas) . "\n";
    return $cartaSorteada->getpontuacao($quantidadeTentativas, $totalCartas);
}

$cartasBaralho = [];
$cartasBaralho[] = new Carta(1, " de Copas", "Sou o começo de um naipe que representa o coração.");
$cartasBaralho[] = new Carta(2, " de Paus", "Não sou vermelho e meu valor é um dos menores.");
$cartasBaralho[] = new Carta(3, " de Ouros", "Meu naipe pode lembrar riqueza e moedas.");
$cartasBaralho[] = new Carta(4, " de Espadas", "Meu símbolo já foi usado em batalhas.");
$cartasBaralho[] = new Carta(5, " de Copas", "Carrego um número ímpar e um naipe vermelho.");
$cartasBaralho[] = new Carta(6, " de Paus", "Meu naipe lembra um trevo, mas não é um.");
$cartasBaralho[] = new Carta(7, " de Ouros", "Sou valioso pelo naipe e paciente pelo número.");

$cartasPokemon = [];
$cartasPokemon[] = new Carta(1, "Pikachu", "Minhas bochechas brilham antes do ataque.");
$cartasPokemon[] = new Carta(2, "Charmander", "Enquanto minha chama estiver acesa, continuo lutando.");
$cartasPokemon[] = new Carta(3, "Bulbasaur", "Carrego uma planta nas costas desde o nascimento.");
$cartasPokemon[] = new Carta(4, "Squirtle", "Minha defesa é uma verdadeira carapaça.");
$cartasPokemon[] = new Carta(5, "Eevee", "Meu futuro depende da escolha da evolução.");
$cartasPokemon[] = new Carta(6, "Mewtwo", "Fui criado pela ciência, não pela natureza.");
$cartasPokemon[] = new Carta(7, "Meowth", "Tenho uma moeda que nunca gasto.");
$cartasPokemon[] = new Carta(8, "Gengar", "Prefiro aparecer quando as luzes se apagam.");
$cartasPokemon[] = new Carta(9, "Snorlax", "Acordar nem sempre faz parte dos meus planos.");

$cartasYugioh = [];
$cartasYugioh[] = new Carta(1, "Dragão Branco de Olhos Azuis", "Poucos monstros inspiram tanto respeito quanto eu.");
$cartasYugioh[] = new Carta(2, "Mago Negro", "Minha magia acompanha um dos duelistas mais famosos.");
$cartasYugioh[] = new Carta(3, "Exodia, o Proibido", "Sozinho não sou suficiente, mas completo sou imparável.");
$cartasYugioh[] = new Carta(4, "Slifer, o Dragão Celeste", "Meu poder cresce conforme a mão do duelista.");
$cartasYugioh[] = new Carta(5, "Obelisco, o Atormentador", "Minha força bruta fala mais alto que palavras.");
$cartasYugioh[] = new Carta(6, "O Dragão Alado de Ra", "Meu verdadeiro poder depende de um antigo idioma.");
$cartasYugioh[] = new Carta(7, "Kuriboh", "Pequeno no tamanho, gigante na hora de proteger.");
$cartasYugioh[] = new Carta(8, "Monstro Renascido", "Trago de volta quem já havia partido.");
$cartasYugioh[] = new Carta(9, "Buraco Armadilha", "Quem entra em ação sem cuidado pode desaparecer.");
$cartasYugioh[] = new Carta(10, "Dragão Negro de Olhos Vermelhos", "Meu rival veste branco, mas eu sou lembrado pela fúria.");




$cartaEscolhida = 0;
$escolha = -1;
$totalPontos = 0;

while ($escolha != 0) {
    echo "Escolha uma opção:\n";
    echo "1. jogar com cartas de baralho\n";
    echo "2. jogar com cartas de pokemon\n";
    echo "3. jogar com cartas de yugioh\n";
    echo "4. Consultar pontos\n";
    echo "0. Sair\n";
    $escolha = readline();
    system("clear");
    switch ($escolha) {
        case 1:
            $totalPontos += testarCartas($cartasBaralho);
            break;

        case 2:
            $totalPontos += testarCartas($cartasPokemon);
            break;

        case 3:
            $totalPontos += testarCartas($cartasYugioh);
            break;

        case 4:
            echo "Sua pontuação total é: " . $totalPontos . "\n";
            break;
        case 0:
            echo "Saindo...\n";
            break;
        default:
            echo "Opção inválida.\n";
            break;
    }
}
