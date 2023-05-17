<?php
namespace Ruan\DP\Stage;

use Ruan\DP\Orcamento;

class EmAprovacao extends EstadoOrcamento {
    public function calculaDescExtra(Orcamento $orcamento){
        return $orcamento->valor *0.05;
    }
    public function aprova(Orcamento $orcamento){
        return $orcamento->estadoAtual = new Aprovado();
    }
    public function reprova(Orcamento $orcamento){
        return $orcamento->estadoAtual = new Reprovado();
    }

}