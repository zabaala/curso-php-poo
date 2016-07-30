<?php

require_once "class/Util.php";
require_once "class/Produto.php";
require_once "class/Fabricante.php";
require_once "class/Caracteristica.php";
require_once "class/Cesta.php";

$cesta = new Cesta();
$cesta->addItem(new Produto('Mochila', 5, 2.50));
$cesta->addItem(new Produto('Café', 100, 7));
$cesta->addItem(new Produto('Mostarda', 50, 3));

Util::pre($cesta);

foreach ($cesta->getItens() as $item) {
    echo 'Item: ' . $item->getDescricao() . ' R$ ' . number_format($item->getPreco(), 2) . '<br>' . PHP_EOL;
}



