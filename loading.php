<?php
if($_GET["acao"] == "cadastro-sucesso"){
	$imagem1 = "images/gif-loading.gif";
	$imagem2 = "images/sucess.jpg";
	$texto1 = "Cadastrando Usuário";
	$texto2 = "Usuário Cadastrado com Sucesso!";
	$texto3 = "Redirecionando<img style='padding-top: 10px' src='images/dot-loading.gif' />";
	$redirect = "index.php";
}else if($_GET["acao"] == "cadastro-erro"){
	$imagem1 = "images/gif-loading.gif";
	$imagem2 = "images/error.jpg";
	$texto1 = "Cadastrando Usuário";
	$texto2 = "Erro ao cadastrar!";
	$texto3 = "Redirecionando<img style='padding-top: 10px' src='images/dot-loading.gif' />";
	$redirect = "cadastro.php";
}else if($_GET["acao"] == "atualiza-sucesso"){
	$imagem1 = "images/gif-loading.gif";
	$imagem2 = "images/sucess.jpg";
	$texto1 = "Atualizando Cadastro";
	$texto2 = "Cadastro Atualizado com Sucesso!";
	$texto3 = "Redirecionando<img style='padding-top: 10px' src='images/dot-loading.gif' />";
	$redirect = "atualizaUsuario.php";
}else if($_GET["acao"] == "atualiza-erro"){
	$imagem1 = "images/gif-loading.gif";
	$imagem2 = "images/error.jpg";
	$texto1 = "Atualizando Usuário";
	$texto2 = "Erro ao Atualizar!";
	$texto3 = "Redirecionando<img style='padding-top: 10px' src='images/dot-loading.gif' />";
	$redirect = "atualizaUsuario.php";
}else if($_GET["acao"] == "exclui-sucesso"){
	$imagem1 = "images/gif-loading.gif";
	$imagem2 = "images/sucess.jpg";
	$texto1 = "Excluindo Usuário";
	$texto2 = "Usuário Excluído com Sucesso!";
	$texto3 = "Redirecionando<img style='padding-top: 10px' src='images/dot-loading.gif' />";
	$redirect = "index.php";
}else if($_GET["acao"] == "exclui-erro"){
	$imagem1 = "images/gif-loading.gif";
	$imagem2 = "images/error.jpg";
	$texto1 = "Excluindo Usuário";
	$texto2 = "Erro ao Excluir Usuário!";
	$texto3 = "Redirecionando<img style='padding-top: 10px' src='images/dot-loading.gif' />";
	$redirect = "atualizaUsuario.php";
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
	<div class="row">
		<div class="col-md-4 offset-md-4" style="margin-top: 13%; text-align: center">
			<img id="imagem1" src='<?php echo $imagem1?>' />			
			<h4 id="texto" ><?php echo $texto1?><img style="padding-top: 10px" src='images/dot-loading.gif' /></h4>		
			<script type='text/JavaScript'>
				setTimeout(function () {							
					document.getElementById('imagem1').src='<?php echo $imagem2?>';
					document.getElementById("texto").innerHTML="<?php echo $texto2?>";
					setTimeout(function () {							
						document.getElementById('imagem1').src='<?php echo $imagem1?>';
						document.getElementById("texto").innerHTML="<?php echo $texto3?>";
						setTimeout(function () {							
							window.location='<?php echo $redirect?>';
						}, 1000);
					}, 2000); 
				}, 2000); 

			</script>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>