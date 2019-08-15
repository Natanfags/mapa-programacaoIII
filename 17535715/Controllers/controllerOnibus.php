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
$qtdPassageiros = $_POST["qtdpassageiros"];
$quantidadeEixo = $_POST["quantidadeeixo"];

include("../Model/Carro.php");
$dadoOnibus = array($qtdPassageiros, $quantidadeEixo);
$dadosVeiculo = array($placa, $numChassi, $cor, $ano, $marca, $modelo, $pesoMaximo, $preco, $numRodas);

$carro1 = new Carro($dadoOnibus, $dadosVeiculo);

?>