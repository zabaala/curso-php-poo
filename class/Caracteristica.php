<?php

class Caracteristica
{
    /**
     * @var string
     */
    private $nome;

    /**
     * @var string
     */
    private $valor;

    /**
     * Caracteristica constructor.
     * @param $nome
     * @param $valor
     */
    public function __construct($nome, $valor)
    {
        $this->nome = $nome;
        $this->valor = $valor;
    }

    /**
     * Recupera o nome da característica.
     * @return string
     */
    public function getNome() {
        return $this->nome;
    }

    /**
     * Recupera o valor da característica.
     * @return string
     */
    public function getValor() {
        return $this->valor;
    }
}