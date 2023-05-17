<?php
namespace Ruan\DP\Impostos;

use Ruan\DP\Orcamento;

class Ikcv extends ImpostoCom2Aliquitas {
    protected function aplicarTaxaMaxima(Orcamento $orcamento){
        return $orcamento->valor > 300 && $orcamento->qtdItens > 3;
    }
    protected function calculaTaxaMaxima(Orcamento $orcamento){
        return $orcamento->valor * 0.04;
    }
    protected function calculaTaxaMinima(Orcamento $orcamento){
        return $orcamento->valor * 0.025;
    }

}