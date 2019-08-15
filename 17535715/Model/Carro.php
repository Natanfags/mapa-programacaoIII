<?php
include("Veiculo.php");

class Carro extends Veiculo {

	private $idCarro;
	private $idVeiculo;
	private $qtdPassageiros;
	private $numPortas;

	public function __construct($dadosCarro, $dadosVeiculo) {
		list($qtdPassageiros, $numPortas) = $dadosCarro;
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

	public function inserir($idVeiculo, $placa, $numChassi, $cor, $ano, $marca, $modelo, $pesoMaximo, $preco, $numRodas) {

		$conectar = new mysqli("localhost", "root", "", "mapa");
		$sql = "insert into veiculo (idVeiculo) values ('{$this->getIdVeiculo()} ',' {$this->getIdVeiculo()}')";
		$conectar->query($sql);
		echo "Registro gravado com o id " . $conectar->insert_id;

	}

	function listarUm($idVeiculo, $placa, $numChassi, $cor, $ano, $marca, $modelo, $pesoMaximo, $preco, $numRodas) {
		$conectar = new mysqli("localhost", "root", "", "mapa");
		$sqlbusca = "select * from veiculo where idCarro = $idVeiculo";
		$retornoBd = $conectar->query($sqlbusca);

	}

	function listarTodos($idVeiculo, $placa, $numChassi, $cor, $ano, $marca, $modelo, $pesoMaximo, $preco, $numRodas) {

		$conectar = new mysqli("localhost", "root", "", "mapa");
		$sqlbusca = "select * from veiculo";
		$retornoBd = $conectar->query($sqlbusca);
		$lista = array();
		while ($temp = $retornoBd->fetch_array()) {
			$lista[] = $temp;
		}
		return $lista;
	}
}

?>