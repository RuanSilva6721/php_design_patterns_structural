<?php
namespace Ruan\DP;

class ItensOrcamento implements Orcavel{
    public float $valor;

    public function valor():float
    {
        return $this->valor;
    }

}