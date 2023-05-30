<?php
namespace Ruan\DP;
use Ruan\DP\Orcamento;
use Ruan\DP\Orcavel;

class CacheOrcamentoProxy extends Orcamento{


    private float $valorCache = 0;
    private Orcamento $orcamento;

    public function __construct(Orcamento $orcamento){
        $this->orcamento = $orcamento;
    }
    public function addItem(Orcavel $itens)
    {
        throw new \DomainException('Não é possivel adicionar item no item cacheado');
    }
    public function valor():float
    {
        if($this->valorCache == 0){
            $this->valorCache = $this->orcamento->valor();
        }
        return $this->valorCache;
    }
}