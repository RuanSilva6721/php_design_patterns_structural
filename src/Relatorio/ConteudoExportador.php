<?php 

namespace Ruan\DP\Relatorio;

use Ruan\DP\Orcamento;

interface ConteudoExportador{
    public function conteudo(): array;
}