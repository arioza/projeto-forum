<?php	
$loading = "Carregando parametros";
$access = "Acessando banco de dados";
$gifLoading = "images/loading.gif";
$redirecting = "Redirecionando";

if($_GET["acao"] == "cadastro-sucesso"){
	$img = "images/success.png";
	$texto1 = "Cadastrando Usuário";
	$redirect = "index.php";
}

else if($_GET["acao"] == "cadastro-erro"){
	$img = "images/error.png";
	$texto1 = "Cadastrando Usuário";
	$redirect = "cadastro.php";
}

else if($_GET["acao"] == "atualiza-sucesso"){
	$img = "images/success.png";
	$texto1 = "Atualizando Cadastro";
	$redirect = "atualizaUsuario.php";
}

else if($_GET["acao"] == "atualiza-erro"){
	$img = "images/error.png";
	$texto1 = "Atualizando Usuário";
	$redirect = "atualizaUsuario.php";
}

else if($_GET["acao"] == "exclui-sucesso"){
	$img = "images/success.png";
	$texto1 = "Excluindo Usuário";
	$redirect = "index.php";
}

else if($_GET["acao"] == "exclui-erro"){
	$img = "images/error.png";
	$texto1 = "Excluindo Usuário";
	$redirect = "atualizaUsuario.php";
}

else if($_GET["acao"] == "cadastra-topico-sucesso"){
	$img = "images/success.png";
	$texto1 = "Cadastrando Tópico";
	$redirect = "meusTopicos.php";
}

else if($_GET["acao"] == "cadastra-topico-erro"){
	$img = "images/error.png";
	$texto1 = "Cadastrando Tópico";
	$redirect = "cadastraTopico.php";
}

else if($_GET["acao"] == "exclui-topico-sucesso"){
	$img = "images/success.png";
	$texto1 = "Excluindo Tópico";
	$redirect = "meusTopicos.php";
}

else if($_GET["acao"] == "exclui-topico-erro"){
	$img = "images/error.png";
	$texto1 = "Excluindo Tópico";
	$redirect = "cadastraTopico.php";
}

else if($_GET["acao"] == "atualiza-topico-sucesso"){
	$img = "images/success.png";
	$texto1 = "Atualizando Tópico";
	$redirect = "meusTopicos.php";
}

else if($_GET["acao"] == "atualiza-topico-erro"){
	$img = "images/error.png";
	$texto1 = "Atualizando Tópico";
	$redirect = "atualizaTopico.php";
}

else if($_GET["acao"] == "insere-comentario-sucesso"){
	$img = "images/success.png";
	$texto1 = "Inserindo Comentario";
	$redirect = "viewTopico.php";
}

else if($_GET["acao"] == "insere-comentario-erro"){
	$img = "images/error.png";
	$texto1 = "Inserindo Comentario";
	$redirect = "viewTopico.php";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf8">
	<title>Carregando</title>
	<link rel="shortcut icon" href="images/icon.png"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">    
	<link rel="stylesheet" type="text/css" href="css/style.css">    
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<div class="row" style="margin-top: 15%; margin-right: 36%">
		<div class="col-md-11" style="text-align: right;">
			<h3><?php echo $loading?></h3>
			<h3 id="texto2"></h3>
			<h3 id="texto3"></h3>
			<h3 id="texto4"></h3>
		</div>
		<div class="col-md-1" style="text-align: left;">
			<h3><img id="img1" src=''/></h3>
			<h3><img id="img2" src=''/></h3>
			<h3><img id="img3" src=''/></h3>
			<h3><img id="img4" src=''/></h3>	
		</div>			
		<script type='text/JavaScript'>
			setTimeout(function () {							
				document.getElementById('img1').src='<?php echo $img?>';					
				document.getElementById("texto2").innerHTML="<?php echo $access?>";
				document.getElementById('img2').src='<?php echo $gifLoading?>';
				setTimeout(function () {													
					document.getElementById('img2').src='<?php echo $img?>';
					document.getElementById("texto3").innerHTML="<?php echo $texto1?>";
					document.getElementById('img3').src='<?php echo $gifLoading?>';
					setTimeout(function () {													
						document.getElementById('img3').src='<?php echo $img?>';
						document.getElementById("texto4").innerHTML="<?php echo $redirecting?>";
						document.getElementById('img4').src='<?php echo $gifLoading?>';
						setTimeout(function () {													
							window.location='<?php echo $redirect?>';
						}, 1000); 
					}, 1000); 
				}, 1000); 
				
			}, 1000); 
			</script>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>