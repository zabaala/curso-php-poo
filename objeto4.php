<?php

require_once "class/Util.php";
require_once "class/Produto.php";
require_once "class/Fabricante.php";
require_once "class/Caracteristica.php";

$prod = new Produto('Mochila', 10, 150);
$fabricante = new Fabricante('HP', 'Av. Paulista', '123.456.789/0001-11');
$prod->setFabricante($fabricante);

$prod->addCaracteristica('Cor', 'Vermelha');
$prod->addCaracteristica('Detalhes', 'acochoados em preto');
$prod->addCaracteristica('Bolsos', '6 bolsos');
$prod->addCaracteristica('Peso', '500g');
$prod->addCaracteristica('Dimensões', '30x40x10 (LxAxP)');
$prod->addCaracteristica('Impermeável', 'Sim');
$prod->addCaracteristica('Acessórios', 'Não');

echo '<h1>'.$prod->getDescricao().'</h1>';

foreach ($prod->getCaracteristicas() as $caracteristica) {
    echo '<strong>' . $caracteristica->getNome() . '</strong>: ' . $caracteristica->getValor() . '; <br>' . PHP_EOL;
}

