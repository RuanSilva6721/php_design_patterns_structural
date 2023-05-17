<?php
namespace Ruan\DP\Descontos;

use Ruan\DP\Orcamento;

class DescontoMaisDe5Itens  extends Desconto{
    public function calcuaDesconto(Orcamento $orcamento){
        if($orcamento->qtdItens > 5){

            return $orcamento->valor * 0.1;
        }
        return $this->proximoDesconto->calcuaDesconto($orcamento);
    }

}