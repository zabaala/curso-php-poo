<?php
namespace App\Classes;

use App\Interfaces\OrcamentoInterface;

class Produto implements OrcamentoInterface
{
    /**
     * Descricao do produto.
     * @var string
     */
    private $descricao;

    /**
     * Quantidade de produtos no estoque.
     * @var int
     */
    private $estoque;

    /**
     * Preço do produto.
     * @var float
     */
    private $preco;

    /**
     * Instância do objeto Fabricante.
     *
     * @var Fabricante
     */
    private $fabricante;

    /**
     * @var array
     */
    private $caracteristicas;

    /**
     * Produto constructor.
     *
     * @param string $descricao
     * @param int $estoque
     * @param int $preco
     */
    public function __construct($descricao = '', $estoque = 0, $preco = 0)
    {
        $this->descricao = $descricao;
        $this->estoque = $estoque;
        $this->preco = $preco;
    }

    /**
     * Adiciona unidades do produto ao estoque.
     * @param int $unidades
     */
    public function aumentarEstoque($unidades = 0)
    {
        if (is_numeric($unidades) && $unidades > 0) {
            $this->estoque += $unidades;
        }
    }

    /**
     * Decrementa unidades do produto ao estoque.
     * @param int $unidades
     */
    public function diminuirEstoque($unidades = 0)
    {
        if (is_numeric($unidades) && $unidades > 0) {
            $this->estoque -= $unidades;
        }
    }

    /**
     * Reajusta o valor do produto a partir de um percentual.
     * @param int $percentual
     */
    public function ajustarPreco($percentual = 0)
    {
        if (is_numeric($percentual) && $percentual > 0) {
            $this->preco *= (1 + ($percentual / 100));
        }
    }

    /**
     * Recebe o valor da descricao.
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Define um valor pra descricao.
     *
     * @param $descricao
     * @throws Exception
     */
    public function setDescricao($descricao)
    {
        if (strlen($descricao) < 7) {
            throw new Exception("Descrição deve possuir no mínimo 7 caracteres");
        }

        if (!is_string($descricao)) {
            throw new Exception("Informe uma cadeia de caracteres para a descrição");
        }

        $this->descricao = $descricao;
    }

    /**
     * Retorna estoque do produto.
     * @return int
     */
    public function getEstoque()
    {
        return $this->estoque;
    }

    /**
     * Seta unidades do produto no estoque.
     * @param int $estoque
     */
    public function setEstoque($estoque)
    {
        if (is_numeric($estoque) && $estoque > 0) {
            $this->estoque = $estoque;
        }
    }

    public function getPreco() {
        return $this->preco;
    }

    /**
     * Define o fabricante do produto.
     * @param Fabricante $f
     */
    public function setFabricante(Fabricante $f)
    {
        $this->fabricante = $f;
    }

    /**
     * Recupera o fabricante do produto.
     * @return Fabricante
     */
    public function getFabricante()
    {
        return $this->fabricante;
    }

    /**
     * Seta uma característica para o produto.
     * @param $nome
     * @param $valor
     */
    public function addCaracteristica($nome, $valor)
    {
        $this->caracteristicas[] = new Caracteristica($nome, $valor);
    }

    /**
     * Retorna todas as características do produto.
     * @return array
     */
    public function getCaracteristicas()
    {
        return $this->caracteristicas;
    }

}