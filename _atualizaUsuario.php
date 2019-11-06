<?php
session_start();
include('conexao.php');
$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
$cidade = mysqli_real_escape_string($conexao, $_POST['cidade']);
$estado = mysqli_real_escape_string($conexao, $_POST['estado']);
$cep = mysqli_real_escape_string($conexao, $_POST['cep']);
$datanasc = mysqli_real_escape_string($conexao, $_POST['datanasc']);
$sexo = mysqli_real_escape_string($conexao, $_POST['sexo']);
$email = mysqli_real_escape_string($conexao, $_POST['email']);

$query = "select usuario from usuarios where usuario = '{$usuario}'";
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

if($row > 0) {
	$query = "update `usuarios` set `nome` = '{$nome}', `senha` = '{$senha}',`cidade` = '{$cidade}',`estado`  = '{$estado}',`cep` = '{$cep}',`datanasc` = '{$datanasc}',`sexo` = '{$sexo}',`email` = '{$email}'";
	mysqli_query($conexao, $query) or die ("Erro ao tentar atualizar");
	echo"<script>alert('Usuário atualizado com sucesso!'); window.location='atualizaUsuario.php';</script>";
	exit();
} else {
	echo"<script>alert('Erro ao atualizar usuário!'); window.location='atualizaUsuario.php';</script>";
}