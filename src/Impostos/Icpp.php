<?php
namespace Ruan\DP\Impostos;

use Ruan\DP\Orcamento;

class Icpp extends ImpostoCom2Aliquitas {
    protected function aplicarTaxaMaxima(Orcamento $orcamento){
        return $orcamento->valor > 500;
    }
    protected function calculaTaxaMaxima(Orcamento $orcamento){
        return $orcamento->valor * 0.03;
    }
    protected function calculaTaxaMinima(Orcamento $orcamento){
        return $orcamento->valor * 0.02;
    }
}