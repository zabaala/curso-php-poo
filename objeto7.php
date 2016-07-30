<?php

require_once 'vendor/autoload.php';

use App\Classes\Orcamento;
use App\Classes\Produto;
use App\Classes\Servico;

$orcamento = new Orcamento();
$orcamento->adicionar(new Produto('Maquina de Café', 10, 299), 1);
$orcamento->adicionar(new Produto('Barbeador Elétrico', 10, 170), 1);
$orcamento->adicionar(new Produto('Barra de chocolate', 10, 7), 3);
$orcamento->adicionar(new Servico('Corte de grama', 20), 1);
$orcamento->adicionar(new Servico('Corte de barba', 20), 1);
$orcamento->adicionar(new Servico('Limpeza do apartamento', 50), 1);

echo $orcamento->total();