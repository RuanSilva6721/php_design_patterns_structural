<?php
namespace Ruan\DP\Impostos;

use Ruan\DP\Orcamento;

abstract class ImpostoCom2Aliquitas implements Imposto {
    public function calculaImposto(Orcamento $orcamento): float
    {
        if($this->aplicarTaxaMaxima($orcamento)){
            return $this->calculaTaxaMaxima($orcamento);
        }
        return $this->calculaTaxaMinima($orcamento);
    }
    abstract protected function aplicarTaxaMaxima(Orcamento $orcamento);
    abstract protected function calculaTaxaMaxima(Orcamento $orcamento);
    abstract protected function calculaTaxaMinima(Orcamento $orcamento);

}