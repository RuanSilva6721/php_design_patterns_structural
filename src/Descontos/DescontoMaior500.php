<?php
namespace Ruan\DP\Descontos;

use Ruan\DP\Orcamento;

class DescontoMaior500 extends Desconto{
    public function calcuaDesconto(Orcamento $orcamento){
   
        if($orcamento->valor > 500){
            return $orcamento->valor *0.05; 
        }
        return $this->proximoDesconto->calcuaDesconto($orcamento);
    }

}