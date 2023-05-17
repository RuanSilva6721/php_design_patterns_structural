<?php
namespace Ruan\DP;

use Ruan\DP\Impostos\Imposto;

class CalcuradoraImpostos {
    public function calcula (Orcamento $orcamento, Imposto $imposto)
    {
        return $imposto->calculaImposto($orcamento);
    }
}
