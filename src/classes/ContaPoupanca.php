<?php
namespace App\Classes;

final class ContaPoupanca extends Conta
{
    public function retirar($quantia) {
        if ($this->saldo >= $quantia) {
            $this->saldo -= $quantia;
            return true;
        }

        return false;
    }
}

