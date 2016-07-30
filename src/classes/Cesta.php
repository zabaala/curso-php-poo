<?php
namespace App\Classes;
class Cesta
{
    /**
     * @var \DateTime
     */
    private $time;

    /**
     * @var array
     */
    private $itens = [];
    
    public function __construct() {
        $this->time = date('d/m/Y H:i:s');
    }

    public function addItem(Produto $p) {
        $this->itens[] = $p;
    }

    public function getItens() {
        return $this->itens;
    }

    public function getTime() {
        return $this->time;
    }
}