<?php

require_once 'vendor/autoload.php';

use App\Classes\Cesta;
use App\Classes\Produto;
use App\Classes\Util;

$cesta = new Cesta();
$cesta->addItem(new Produto('Mochila', 5, 2.50));
$cesta->addItem(new Produto('Café', 100, 7));
$cesta->addItem(new Produto('Mostarda', 50, 3));

Util::pre($cesta);

foreach ($cesta->getItens() as $item) {
    echo 'Item: ' . $item->getDescricao() . ' R$ ' . number_format($item->getPreco(), 2) . '<br>' . PHP_EOL;
}



