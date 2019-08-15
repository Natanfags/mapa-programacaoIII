<?php

$placa = $_POST["placa"];
$numChassi = $_POST["numchassi"];
$cor = $_POST["cor"];
$ano = $_POST["ano"];
$marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$pesoMaximo = $_POST["pesomaximo"];
$preco = $_POST["preco"];
$numRodas = $_POST["numrodas"];
$quantidadeEixo = $_POST["quantidadeeixo"];

include("../Model/Caminhao.php");
$dadosCaminhao = array($quantidadeEixo);
$dadosVeiculo = array($placa, $numChassi, $cor, $ano, $marca, $modelo, $pesoMaximo, $preco, $numRodas);

$caminhao1 = new Caminhao($dadosCaminhao, $dadosVeiculo);

?>