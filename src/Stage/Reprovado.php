<?php
namespace Ruan\DP\Stage;

use Ruan\DP\Orcamento;

class Reprovado extends EstadoOrcamento {
    public function calculaDescExtra(Orcamento $orcamento){
       throw new \DomainException ('Orçamentos reprovados e finalizados não podem receber desconto');
    }
    public function finaliza(Orcamento $orcamento){
        return $orcamento->estadoAtual = new Finalizado();
    }

}