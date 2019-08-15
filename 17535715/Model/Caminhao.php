<?php
class Caminhao{

    private $idCaminhao, $idVeiculo, $pesoMaximo, $quantidadeEixo;

    public function setIdCaminhao($idCaminhao){
        $this->idCaminhao=$idCaminhao;
    }

    public function getIdCaminhao(){
        return $this->idCaminhao;
    }

    public function setIdVeiculo($idVeiculo){
        $this->idVeiculo=$idVeiculo;
    }

    public function getIdVeiculo(){
        return $this->idVeiculo;
    }

    public function setPesoMaximo($pesoMaximo){
        $this->pesoMaximo=$pesoMaximo;
    }

    public function getPesoMaximo(){
        return $this->pesoMaximo;
    }

    public function setQuantidadeEixo($quantidadeEixo){
        $this->quantidadeEixo=$quantidadeEixo;
    }

    public function getQuantidadeEixo(){
        return $this->quantidadeEixo;
    }
}
?>