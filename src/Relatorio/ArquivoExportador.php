<?php 

namespace Ruan\DP\Relatorio;

interface ArquivoExportador{
    public function salvar(ConteudoExportador $conteudoExportadorr): string;
}