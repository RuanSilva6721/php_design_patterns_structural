<?php
namespace Ruan\DP\Stage;

use Ruan\DP\Orcamento;

class Finalizado extends EstadoOrcamento {
    public function calculaDescExtra(Orcamento $orcamento){
       throw new \DomainException ('Orçamentos reprovados e finalizados não podem receber desconto');
    }


}