<?php

require_once 'modelo/Cliente.php';
require_once 'modelo/ClientePF.php';
require_once 'modelo/ClientePJ.php';
require_once 'util/Conexao.php';

class ClienteDAO
{

    public function inserir(Cliente $cliente)
    {

        $sql = "INSERT INTO clientes
    (tipo, nome_social, email, nome_completo, cpf, razao_social, cnpj)
    VALUES (?, ?, ?, ?, ?, ?, ?)";

        $conexao = Conexao::getConexao();
        $stm = $conexao->prepare($sql);
        if ($cliente instanceof ClientePF) {
            $stm->execute(array(
                $cliente->getTipo(),
                $cliente->getNomeSocial(),
                $cliente->getEmail(),
                $cliente->getNome(),
                $cliente->getNroDoc(),
                null,
                null

            ));
        }elseif ($cliente instanceof ClientePJ) {
            $stm->execute(array(
                $cliente->getTipo(),
                $cliente->getNomeSocial(),
                $cliente->getEmail(),
                null,
                null,
                $cliente->getNome(),
                $cliente->getNroDoc()
                

            ));
        }
    }

    public function listar()
    {
        $sql = "SELECT * FROM clientes";

        $conexao = Conexao::getConexao();
        $stm = $conexao->prepare($sql);
        $stm->execute();
        $dados = $stm->fetchAll();

        $clientes = $this->mapear($dados);
        return $clientes;
    }

    private function mapear(array $dados): array
    {

        $clientes = [];

        foreach ($dados as $d) {
            $tipo = $d['tipo'];
            $cliente = null;

            if ($tipo == 'F') {
                $cliente = new ClientePF($d['nome_completo'], $d['cpf'], $d['email'], $d['nome_social']);

            } elseif ($tipo == 'J') {
                $cliente = new ClientePJ($d['razao_social'], $d['cnpj'], $d['email'], $d['nome_social']);

            } else
                continue;
            
            $cliente->setId($d['id']);
            
            $clientes[] = $cliente;


        }

        return $clientes;

    }

    public function buscarCliente($id){

        

    }

}