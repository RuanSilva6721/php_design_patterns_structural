<?php
namespace Ruan\DP\Impostos;

use Ruan\DP\Orcamento;

class Icms extends Imposto {
    public function realizaCalculo(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.1;
    }

}