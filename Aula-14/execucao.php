<?php

require_once 'util/Conexao.php';
require_once 'modelo/ClientePF.php';
require_once 'modelo/ClientePJ.php';
require_once 'dao/ClienteDAO.php';
/*
$conexao = Conexao::getConexao();

print_r($conexao);
*/
$opcao = null;
$clienteDAO = new ClienteDAO();
do {
    echo "--- Cadastro dos trouxas ---\n";
    echo "1 - Pessoa Física\n";
    echo "2 - Pessoa Jurídica\n";
    echo "3 - Listar clientes\n";
    echo "4 - Buscar cliente\n";
    echo "5 - Excluir\n";
    echo "0 - Sair\n";
    echo "Escolha uma opção: ";
    $opcao = readline();

    switch ($opcao) {
        case 1:

            $nomeSocial = readline("Digite o nome social: ");
            $nomeCompleto = readline("Digite o nome completo: ");
            $cpf = readline("Digite o CPF: ");
            $email = readline("Digite o email: ");
            
            $cliente = new ClientePF($nomeCompleto, $cpf, $email, $nomeSocial);
            
            $clienteDAO->inserir($cliente);
            
            break;

        case 2:
            echo "Digite o nome social: ";
            $nomeSocial = readline();
            echo "Digite a razão social: ";
            $razaoSocial = readline();
            echo "Digite o CNPJ: ";
            $cnpj = readline();
            echo "Digite o email: ";
            $email = readline();
            
            $cliente = new ClientePJ($razaoSocial, $cnpj, $email, $nomeSocial);
            
            $clienteDAO->inserir($cliente);

            break;

        case 3:
            
            $clientes = $clienteDAO->listar();

            foreach ($clientes as $c) {
                echo $c . "\n";
            }
            break;
        case 0:
            echo "Saindo...\n";
            break;
        default:
            echo "Opção inválida. Tente novamente.\n";
    }
} while ($opcao != 0);
