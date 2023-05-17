<?php
namespace Ruan\DP\Stage;

use Ruan\DP\Orcamento;

abstract class EstadoOrcamento {

    abstract public function calculaDescExtra(Orcamento $orcamento);

    public function aprova(Orcamento $orcamento){
        throw new \DomainException ('Orçamentos reprovados e finalizados não podem receber desconto');
    }
    public function reprova(Orcamento $orcamento){
        throw new \DomainException ('Orçamentos reprovados e finalizados não podem receber desconto');
    }
    public function finaliza(Orcamento $orcamento){
        throw new \DomainException ('Orçamentos reprovados e finalizados não podem receber desconto');
    }

}