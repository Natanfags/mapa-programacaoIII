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
$numPortas = $_POST["numportas"];

include("../Model/Carro.php");
$dadosCarro = array($qtdPassageiros, $numPortas);
$dadosVeiculo = array($placa, $numChassi, $cor, $ano, $marca, $modelo, $pesoMaximo, $preco, $numRodas);

$carro1 = new Carro($dadosCarro, $dadosVeiculo);

?>