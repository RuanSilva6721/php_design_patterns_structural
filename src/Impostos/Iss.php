<?php
namespace Ruan\DP\Impostos;

use Ruan\DP\Orcamento;

class iss implements Imposto {

    public function calculaImposto(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.06;
    }
}