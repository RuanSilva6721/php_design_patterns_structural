<?php
namespace Ruan\DP\Descontos;

use Ruan\DP\Orcamento;

abstract class Desconto {
    protected ?Desconto $proximoDesconto;

    public function __construct(?Desconto $proximoDesconto){
        $this->proximoDesconto = $proximoDesconto;
    }

    abstract public function calcuaDesconto(Orcamento $orcamento);
}