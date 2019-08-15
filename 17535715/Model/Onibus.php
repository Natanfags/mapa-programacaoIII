<?php
include("Veiculo.php");

class Onibus extends Veiculo {

	private $idOnibus, $idVeiculo, $qtdPassageiros, $quantidadeEixo;

	public function __construct($dadosOnibus, $dadosVeiculo) {
		list($qtdPassageiros, $quantidadeEixo) = $dadosOnibus;
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