<?php
session_start();
include('conexao.php');
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);

$query = "select usuario from usuarios where usuario = '{$usuario}'";
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

if($row > 0) {
	$query = "delete from usuarios where usuario = '{$usuario}'";
	mysqli_query($conexao, $query) or die ("Erro ao tentar atualizar");
	echo"<script>alert('Usuário excluído com sucesso!'); window.location='index.php';</script>";
	exit();
} else {
	echo"<script>alert('Erro ao excluir usuário!'); window.location='atualizaUsuario.php';</script>";
}