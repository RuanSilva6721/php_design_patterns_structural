<?php
namespace Ruan\DP\Impostos;

use Ruan\DP\Orcamento;

abstract class Imposto {

    private ?Imposto $outroImposto;

    public function __construct(Imposto $outroImposto = null){
        $this->outroImposto = $outroImposto;
    }
    // public function calculaImposto(Orcamento $orcamento): float;

    abstract public function realizaCalculo(Orcamento $orcamento): float;

    public function calculaImposto(Orcamento $orcamento){
        return $this->realizaCalculo($orcamento) + $this->realizaCalculoOutroImposto($orcamento);

    }
    public function realizaCalculoOutroImposto(Orcamento $orcamento){
      
        return $this->outroImposto === null ? 0 : $this->outroImposto->calculaImposto($orcamento);

    }
}