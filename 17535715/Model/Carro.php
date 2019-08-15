<?php
include("Veiculo.php");

class Carro extends Veiculo {

	private $idCarro;
	private $idVeiculo;
	private $qtdPassageiros;
	private $numPortas;

	public function __construct($dadosCarro, $dadosVeiculo) {
		list($idCarro, $idVeiculo, $qtdPassageiros, $numPortas) = $dadosCarro;
		$this->setIdCarro($idCarro);
		$this->setIdVeiculo($idVeiculo);
		$this->setQtdPassageiros($qtdPassageiros);
		$this->setNumPortas($numPortas);
		parent::__construct($dadosVeiculo);
	}

	public function setIdCarro($idCarro) {
		$this->idCarro = $idCarro;
	}

	public function getIdCarro() {
		return $this->idCarro;
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

	public function setNumPortas($numPortas) {
		$this->numPortas = $numPortas;
	}

	public function getNumPortas() {
		return $this->numPortas;
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