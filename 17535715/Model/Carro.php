<?php
class Carro{

    private $idCarro, $idVeiculo, $qtdPassageiros, $numPortas;

    public function setIdCarro($idCarro){
        $this->idCarro=$idCarro;
    }

    public function getIcarro(){
        return $this->idCarro;
    }

    public function setIdVeiculo($idVeiculo){
        $this->idVeiculo=$idVeiculo;
    }

    public function getidVeiculo(){
        return $this->idVeiculo;
    }

    public function setQtdPassageiros($qtdPassageiros){
        $this->qtdPassageiros=$qtdPassageiros;
    }

    public function getQtdPassageiros(){
        return $this->qtdPassageiros;
    }

    public function setNumPortas($numPortas){
        $this->numPortas=$numPortas;
    }

    public function getNumPortas(){
        return $this->numPortas;
    }
}
?>