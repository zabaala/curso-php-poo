<?php

class Servico implements OrcamentoInterface
{
    private $descricao;
    private $preco;

    public function __construct($descricao, $preco)
    {
        $this->descricao = $descricao;
        $this->preco = $preco;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }
}