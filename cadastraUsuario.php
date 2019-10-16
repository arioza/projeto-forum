<?php
session_start();
include('conexao.php');

$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
$cidade = mysqli_real_escape_string($conexao, $_POST['cidade']);
$estado = mysqli_real_escape_string($conexao, $_POST['estado']);
$cep = mysqli_real_escape_string($conexao, $_POST['cep']);

$query = "select usuario from usuarios where usuario = '{$usuario}'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 0) {
	$query = "INSERT INTO `usuarios` (`nome`,`usuario`,`senha`,`cidade`,`estado`,`cep`) VALUES ('{$nome}','{$usuario}','{$senha}','{$cidade}','{$estado}','{$cep}')";
	mysqli_query($conexao, $query) or die ("Erro ao tentar cadastrar");
	header('Location: index.php');
	exit();
} else {
	echo "nao cadastrado";
}