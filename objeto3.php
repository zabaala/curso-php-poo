<?php
require_once 'vendor/autoload.php';

use App\Classes\Fabricante;
use App\Classes\Produto;


//$prod1 = new Produto('Mochila', 10, 150);
//$fabricante1 = new Fabricante('HP', 'Av. Paulista', '123.456.789/0001-11');
//$prod1->setFabricante($fabricante1);
//
//$prod2 = new Produto('Notebook', 5, 2500);
//$prod2->setFabricante($fabricante1);
//

$produto[] = new Produto('Notebook Dell Inpire', 5, 10000);
$produto[] = new Produto('Mochila', 30, 200);
$produto[] = new Produto('Caneta', 30, 2.5);

$fabricante = new Fabricante('Dell', 'Av. Santos Dumont', '123333');
$fabricante->setProdutos($produto);

\App\Classes\Util::pre($fabricante);
//Util::pre($prod2);