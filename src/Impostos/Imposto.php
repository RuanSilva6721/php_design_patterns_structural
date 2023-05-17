<?php
namespace Ruan\DP\Impostos;

use Ruan\DP\Orcamento;

interface Imposto {
    public function calculaImposto(Orcamento $orcamento): float;

}