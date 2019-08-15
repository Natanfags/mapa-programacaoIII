<?php
class Carro{

    private $idOnibus, $idVeiculo, $qtdPassageiros, $quantidadeEixo;

    public function setIdOnibus($idOnibus){
        $this->ididOnibusCarro=$idOnibus;
    }

    public function getIdOnibus(){
        return $this->idOnibus;
    }

    public function setIdVeiculo($idVeiculo){
        $this->idVeiculo=$idVeiculo;
    }

    public function getIdVeiculo(){
        return $this->idVeiculo;
    }

    public function setQtdPassageiros($qtdPassageiros){
        $this->qtdPassageiros=$qtdPassageiros;
    }

    public function getQtdPassageiros(){
        return $this->qtdPassageiros;
    }

    public function setQuantidadeEixo($quantidadeEixo){
        $this->quantidadeEixo=$quantidadeEixo;
    }

    public function getQuantidadeEixo(){
        return $this->quantidadeEixo;
    }
}
?>