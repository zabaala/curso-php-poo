<?php

class ContaCorrente extends Conta
{
    protected $limite;

    public function __construct($agencia, $conta, $saldo, $limite)
    {
        parent::__construct($agencia, $conta, $saldo);

        $this->limite = $limite;
    }

    /**
     * @param $quantia
     * @return bool
     */
    final public function retirar($quantia) {
        if (($this->saldo + $this->limite) >= $quantia) {
            $this->saldo -= $quantia;
            return true;
        }

        return false;
    }

    public function getLimite() {
        return $this->limite;
    }


}
