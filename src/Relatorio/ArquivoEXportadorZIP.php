<?php 

namespace Ruan\DP\Relatorio;

use Ruan\DP\Relatorio\ConteudoExportador;


class ArquivoExportadorZIP implements ArquivoExportador{

    /**
     * Summary of nomeArquivoInterno
     * @var 
     */
    private string $nomeArquivoInterno;
    /**
     * Summary of __construct
     * @param mixed $nomeArquivoInterno
     */
    public function __construct(string $nomeArquivoInterno){
        $this->nomeArquivoInterno = $nomeArquivoInterno;
    }
    /**
     * Summary of salvar
     * @param \Ruan\DP\Relatorio\CouteudoExportador $couteudoExportador
     * @return void
     */
    public function salvar(ConteudoExportador $conteudoExportador): string
    {
        $caminhoArquivo = tempnam(sys_get_temp_dir(), 'ZIP');
        $arquivoZip = new \ZipArchive();
        $arquivoZip->open($caminhoArquivo);
        $arquivoZip->addFromString($this->nomeArquivoInterno, serialize($conteudoExportador->conteudo()));
        return $caminhoArquivo;
    }
}