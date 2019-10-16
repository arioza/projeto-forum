<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login - Fórum</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">    
	<link rel="stylesheet" type="text/css" href="css/style.css">    
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>

<body>
	<div class="container" style="margin-top: 7%">
		<div class="row">
			<div class="col-md-2 offset-md-5" style="margin-bottom: 20px; padding-left: 45px">
				<h2>Login</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 offset-md-4">

				<?php
				if(isset($_SESSION['nao_autenticado'])):
					?>
					<div class="notification is-danger">
						<p>ERRO: Usuário ou senha inválidos.</p>
					</div>
					<?php
				endif;
				unset($_SESSION['nao_autenticado']);
				?> 

				<form action="login.php" method="POST">     
					<label>Usuário</label>                          
					<input name="usuario" class="form-control" autofocus="">                
				</br>            
				<label>Senha</label>                     
				<input name="senha" class="form-control" type="password">            			    
				<div class="row">
					<div class="col-md-4 offset-md-4" style="padding-top: 20px">
						<button type="submit" class="btn btn-dark">Entrar</button>                
						<div style="padding-top: 10px; margin-left: -10px">
							<a href="cadastro.php" class="btn-link">Cadastre-se</a>
						</div>            
					</div>
				</div>

			</form> 
		</div>
	</div>
</div>



<!--JavaScript-->                    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>                
</body>

</html>