<?php

require_once 'modelo/Prato.php';
require_once 'modelo/Pedido.php';


$pratos = [];

$pratos[] = new Prato(1, "Camarão à Milanesa", 110.00);
$pratos[] = new Prato(2, "Pizza Margherita", 80.00);
$pratos[] = new Prato(3, "Macarrão à Carbonara", 60.00);
$pratos[] = new Prato(4, "Bife à Parmegiana", 75.00);
$pratos[] = new Prato(5, "Risoto ao Funghi", 70.00);

$pedidos = [];

do {

    echo "\n=================================\n";
    echo "        BONA COMIDA\n";
    echo "=================================\n";
    echo "1 - Cadastrar pedido\n";
    echo "2 - Cancelar pedido\n";
    echo "3 - Listar pedidos\n";
    echo "4 - Total de vendas\n";
    echo "0 - Sair\n";
    echo "Escolha uma opção: ";

    $opcao = readline();


    switch ($opcao) {

        case 1:

            echo "\n--- CADASTRAR PEDIDO ---\n";

            echo "Nome do cliente: ";
            $nomeCliente = trim(fgets(STDIN));

            echo "Nome do garçom: ";
            $nomeGarcom = trim(fgets(STDIN));


            echo "\nPratos disponíveis:\n";

            foreach ($pratos as $prato) {
                echo $prato->getNumero() . " - "
                    . $prato->getNome()
                    . " - R$ "
                    . number_format($prato->getValor(), 2, ',', '.')
                    . "\n";
            }


            do {

                echo "Digite o número do prato (1 a 5): ";
                $numeroPrato = readline();

                if ($numeroPrato < 1 || $numeroPrato > 5) {
                    echo "Número de prato inválido!\n";
                }

            } while ($numeroPrato < 1 || $numeroPrato > 5);

            $pratoEscolhido = $pratos[$numeroPrato - 1];


            $pedido = new Pedido(
                $nomeCliente,
                $nomeGarcom,
                $pratoEscolhido
            );

            $pedidos[] = $pedido;


            echo "Pedido cadastrado com sucesso!\n";

            break;


            case 2:

            echo "\n--- CANCELAR PEDIDO ---\n";

            if (count($pedidos) == 0) {
                echo "Não existem pedidos cadastrados.\n";
                break;
            }

            foreach ($pedidos as $indice => $pedido) {

                echo "Índice: " . $indice
                    . " | Cliente: " . $pedido->getNomeCliente()
                    . " | Prato: " . $pedido->getPrato()->getNome()
                    . "\n";
            }


            echo "Digite o índice do pedido que deseja cancelar: ";
            $indice = readline();


            if ($indice >= 0 && $indice < count($pedidos)) {

                unset($pedidos[$indice]);

                $pedidos = array_values($pedidos);

                echo "Pedido cancelado com sucesso!\n";

            } else {

                echo "Índice inválido!\n";
            }

            break;


        
        case 3:

            echo "\n--- LISTA DE PEDIDOS ---\n";

            if (count($pedidos) == 0) {

                echo "Não existem pedidos cadastrados.\n";

                break;
            }


            foreach ($pedidos as $pedido) {

                echo "O cliente "
                    . $pedido->getNomeCliente()
                    . ", foi atendido pelo garçom "
                    . $pedido->getNomeGarcom()
                    . ", pediu um prato de "
                    . $pedido->getPrato()->getNome()
                    . " no valor de R$ "
                    . number_format(
                        $pedido->getPrato()->getValor(),
                        2,
                        ',',
                        '.'
                    )
                    . ".\n";
            }

            break;

        case 4:

            echo "\n--- TOTAL DE VENDAS ---\n";

            $total = 0;


            foreach ($pedidos as $pedido) {

                $total += $pedido->getPrato()->getValor();
            }


            echo "Total de vendas: R$ "
                . $total
                . "\n";

            break;

        case 0:

            echo "Programa encerrado.\n";

            break;


        default:

            echo "Opção inválida!\n";
    }


} while ($opcao != 0);

