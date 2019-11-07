<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Atualizando...</title>
	<link rel="shortcut icon" href="images/icon.png"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/19ae817b2a.js" crossorigin="anonymous"></script>	
</head>
<body>
	<?php	
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
		mysqli_query($conexao, $query) or die ("<script>window.location='loading.php?acao=cadastro-erro';</script>");		
		echo"<script>window.location='loading.php?acao=atualiza-sucesso';</script>";

		exit();
	} else {
		echo "<script>window.location='loading.php?acao=atualiza-erro';</script>";
	}
	?>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>