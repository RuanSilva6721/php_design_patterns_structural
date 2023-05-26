<?php 

namespace Ruan\DP\Relatorio;

use Ruan\DP\Relatorio\ConteudoExportador;


class ArquivoExportadorXML implements ArquivoExportador{

    private string $nomeElementoPai;
    /**
     * Summary of __construct
     * @param mixed $nomeElementoPai
     */
    public function __construct(string $nomeElementoPai){
        $this->nomeElementoPai = $nomeElementoPai;
    }
    /**
     * Summary of salvar
     * @param \Ruan\DP\Relatorio\CouteudoExportador $couteudoExportador
     * @return void
     */
    public function salvar(ConteudoExportador $conteudoExportador): string
    {
        $elementoXML =  new \SimpleXMLElement("<{$this->nomeElementoPai}/>");
        foreach($conteudoExportador->conteudo() as $item => $valor){
            $elementoXML->addChild($item, $valor);
        }
        $caminhoArquivo = 'C:\xampp\htdocs\php_design_patterns_structural\ArquivosExportados\XML';
        $elementoXML->asXML($caminhoArquivo);

        return $caminhoArquivo;

    }
}