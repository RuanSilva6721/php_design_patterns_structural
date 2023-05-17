<?php
namespace Ruan\DP\Descontos;

use Ruan\DP\Orcamento;

class SemDesconto extends Desconto {

    public function __construct()
    {
        parent::__construct(null);
    }
    public function calcuaDesconto(Orcamento $orcamento){
        return 0;
    }
}