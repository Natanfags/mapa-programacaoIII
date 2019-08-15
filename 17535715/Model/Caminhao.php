<?php
include("Veiculo.php");

class Caminhao extends Veiculo {

	private $idCaminhao;
	private $idVeiculo;
	private $pesoMaximo;
	private $quantidadeEixo;

	public function __construct($dadosCaminhao, $dadosVeiculo) {
		list($idCaminhao, $idVeiculo, $pesoMaximo, $quantidadeEixo) = $dadosCaminhao;
		$this->setIdCaminhao($idCaminhao);
		$this->setIdVeiculo($idVeiculo);
		$this->setPesoMaximo($pesoMaximo);
		$this->setQuantidadeEixo($quantidadeEixo);
		parent::__construct($dadosVeiculo);
	}

	public function setIdCaminhao($idCaminhao) {
		$this->idCaminhao = $idCaminhao;
	}

	public function getIdCaminhao() {
		return $this->idCaminhao;
	}

	public function setIdVeiculo($idVeiculo) {
		$this->idVeiculo = $idVeiculo;
	}

	public function getIdVeiculo() {
		return $this->idVeiculo;
	}

	public function setPesoMaximo($pesoMaximo) {
		$this->pesoMaximo = $pesoMaximo;
	}

	public function getPesoMaximo() {
		return $this->pesoMaximo;
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