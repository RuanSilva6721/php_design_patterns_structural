<?php 

namespace Ruan\DP\Relatorio;

use Ruan\DP\Orcamento;

class ExportadorZIP{
    public function exportar(Orcamento $orcamento){
        $caminhoArquivo = 'C:\xampp\htdocs\php_design_patterns_structural\orcamento.zip';
        $zip = new \ZipArchive();
        $zip->open($caminhoArquivo, \ZipArchive::CREATE);
        $zip->addFromString('orcamento', serialize($orcamento));
        $zip->close();
        echo $caminhoArquivo;

    }
}