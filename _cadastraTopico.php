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
	date_default_timezone_set('America/Cuiaba');
	include('conexao.php');	
	$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
	$idAdm = mysqli_real_escape_string($conexao, $_POST['id']);
	$categoria = mysqli_real_escape_string($conexao, $_POST['categoria']);
	$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
	$detalhe = mysqli_real_escape_string($conexao, $_POST['detalhe']);
	$data = date('y-m-d H:i:s');

	$query = "select nome from topicos where nome = '{$nome}'";
	$result = mysqli_query($conexao, $query);
	$row = mysqli_num_rows($result);

	if($row == 0) {
		$query = "INSERT INTO `topicos` (`idAdm`,`categoria`,`nome`,`detalhe`,`data`) VALUES ('{$idAdm}','{$categoria}','{$nome}','{$detalhe}','{$data}')";
		mysqli_query($conexao, $query) or die ("<script>window.location='loading.php?acao=cadastra-topico-erro';</script>");		
		echo"<script>window.location='loading.php?acao=cadastra-topico-sucesso';</script>";
		exit();
	} else {
		echo "<script>window.location='loading.php?acao=cadastra-topico-erro';</script>";
	}
	?>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>