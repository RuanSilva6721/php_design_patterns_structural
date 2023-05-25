<?php 

namespace Ruan\DP\Relatorio;

use Ruan\DP\Orcamento;

class ExportadorXML{

    public function exportar(Orcamento $orcamento){
        $elementoOrcamento = new \SimpleXMLElement('<orcamento/>');
        $elementoOrcamento->children('valor', $orcamento->valor);
        $elementoOrcamento->addChild('quantidade_itens', $orcamento->qtdItens);

        return $elementoOrcamento->asXML();
    }
}