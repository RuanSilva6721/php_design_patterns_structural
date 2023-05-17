<?php
namespace Ruan\DP\Stage;

use Ruan\DP\Orcamento;

class Aprovado extends EstadoOrcamento {
    public function calculaDescExtra(Orcamento $orcamento){
        return $orcamento->valor *0.02;
    }
    public function finaliza(Orcamento $orcamento){
        return $orcamento->estadoAtual = new Finalizado();
    }

}