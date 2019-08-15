<?php
include("Veiculo.php");

class Caminhao extends Veiculo {

	private $idCaminhao;
	private $idVeiculo;
	private $pesoMaximo;
	private $quantidadeEixo;

	public function __construct($dadosCaminhao, $dadosVeiculo) {
		list($pesoMaximo, $quantidadeEixo) = $dadosCaminhao;
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