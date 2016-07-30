<?php

require_once 'class/Util.php';
require_once 'class/Conta.php';
require_once 'class/ContaPoupanca.php';
require_once 'class/ContaCorrente.php';

$contas = [];
$contas[] = new ContaCorrente('6677', '1234-56', 100, 500);
$contas[] = new ContaPoupanca('6678', 'CC.1234-57', 100);

foreach ($contas as $key => $conta) {
    print "Conta: {$conta->getInfo()}<br>\n";
    print " - Saldo Atual {$conta->getSaldo()}<br>\n";
    $conta->depositar(200);
    print ' - Deposito de 200 reais <br>' . PHP_EOL;
    print " - Saldo Atual {$conta->getSaldo()}<br>\n";
    print " - Limite " . @$conta->getLimite(). "<br>\n";

    if($conta->retirar(700)) {
        print " - Retirada de: 700 <br>\n";
    } else {
        print " - Retirada de: 700 <strong>(não permitida)</strong><br>\n";
    }

    print " - Saldo Atual {$conta->getSaldo()}<br>\n";
}