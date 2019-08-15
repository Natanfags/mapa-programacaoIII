<?php
include("Veiculo.php");

class Onibus extends Veiculo {

	private $idOnibus, $idVeiculo, $qtdPassageiros, $quantidadeEixo;

	public function __construct($dadosOnibus, $dadosVeiculo) {
		list($idOnibus, $idVeiculo, $qtdPassageiros, $quantidadeEixo) = $dadosOnibus;
		$this->setIdOnibus($idOnibus);
		$this->setIdVeiculo($idVeiculo);
		$this->setQtdPassageiros($qtdPassageiros);
		$this->setQuantidadeEixo($quantidadeEixo);
		parent::__construct($dadosVeiculo);
	}

	public function setIdOnibus($idOnibus) {
		$this->idOnibus = $idOnibus;
	}

	public function getIdOnibus() {
		return $this->idOnibus;
	}

	public function setIdVeiculo($idVeiculo) {
		$this->idVeiculo = $idVeiculo;
	}

	public function getIdVeiculo() {
		return $this->idVeiculo;
	}

	public function setQtdPassageiros($qtdPassageiros) {
		$this->qtdPassageiros = $qtdPassageiros;
	}

	public function getQtdPassageiros() {
		return $this->qtdPassageiros;
	}

	public function setQuantidadeEixo($quantidadeEixo) {
		$this->quantidadeEixo = $quantidadeEixo;
	}

	public function getQuantidadeEixo() {
		return $this->quantidadeEixo;
	}

	function inserir($idVeiculo, $placa, $numChassi, $cor, $ano, $marca, $modelo, $pesoMaximo, $preco, $numRodas) {
		// TODO: Implement inserir() method.
	}

	function listarUm($idVeiculo, $placa, $numChassi, $cor, $ano, $marca, $modelo, $pesoMaximo, $preco, $numRodas) {
		// TODO: Implement listarUm() method.
	}

	function listarTodos($idVeiculo, $placa, $numChassi, $cor, $ano, $marca, $modelo, $pesoMaximo, $preco, $numRodas) {
		// TODO: Implement listarTodos() method.
	}
}

?>