<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf8">
	<title>Cadastro - Fórum</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">    
	<link rel="stylesheet" type="text/css" href="css/style.css">    
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<style type="text/css">
		.toggleSenha {
			border-color: red !important;
		}
	</style>
	<script type="text/javascript" >

		function limpa_formulário_cep() {                
			document.getElementById('cidade').value=("");
			document.getElementById('uf').value=("");            
		}

		function meu_callback(conteudo) {
			if (!("erro" in conteudo)) {

				document.getElementById('cidade').value=(conteudo.localidade);
				document.getElementById('uf').value=(conteudo.uf);            
			}
			else {            
				limpa_formulário_cep();
				alert("CEP não encontrado.");
			}
		}

		function pesquisacep(valor) {

			var cep = valor.replace(/\D/g, '');

			if (cep != "") {

				var validacep = /^[0-9]{8}$/;

				if(validacep.test(cep)) {

					document.getElementById('cidade').value="...";
					document.getElementById('uf').value="...";                

					var script = document.createElement('script');

					script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

					document.body.appendChild(script);

				}
				else {

					limpa_formulário_cep();
					alert("Formato de CEP inválido.");
				}
			} 
			else {            
				limpa_formulário_cep();
			}
		};

		function testaSenha(){
			var senha = document.getElementById('senha').value;
			var confSenha = document.getElementById('senha_confirma').value;
			if(senha != confSenha){
				alert("Senhas não conferem!");
			}
		}

		// function testaUsuario(){						
		// 	<?php
		// 	include('conexao.php');											
		// 	$query = "select usuario from usuarios where usuario = 'arioza'";				
		// 	$result = mysqli_query($conexao, $query);			
		// 	$row = mysqli_num_rows($result);						
		// 	if($row != 0) {
		// 		echo"<script>alert('Usuário já existe, por favor, insira outro!');</script>";
		// 	}
		// 	?>
	</script>


</head>
<body>
	<div class="container" style="margin-top: 7%">
		<div class="row">
			<div class="col-md-2 offset-md-5" style="margin-bottom: 20px">
				<h2>Cadastro</h2>
			</div>
		</div>
		<form action="cadastraUsuario.php" method="POST">
			<div class="row">
				<div class="col-md-6">
					<label>Nome</label>
					<input name="nome" type="text" class="form-control" required>
					<label>Usuário</label>
					<input name="usuario" type="text" class="form-control" required>

					<div class="row">
						<div class="col-md-6">
							<label>Senha</label>
							<input name="senha" id='senha' type="password" class="form-control" required>
						</div>
						<div class="col-md-6">
							<label>Confirme a Senha</label>
							<input id="senha_confirma" type="password" class="form-control" onblur="testaSenha();" required>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-4">						
							<label>CEP</label>
							<div>
								<input name="cep" class="form-control" type="text" id="cep" value="" maxlength="9" onblur="pesquisacep(this.value);" required>	
							</div>
						</div>
						<div class="col-md-6">
							<label>Cidade</label>
							<div>
								<input name="cidade" class="form-control" type="text" id="cidade" readonly="true">
							</div>
						</div>
						<div class="col-md-2">
							<label>Estado</label>
							<div>
								<input name="estado" class="form-control" type="text" id="uf" readonly="true">
							</div>
						</div>
					</div>																	
					<div class="row">
						<div class="col-md-6">
							<label>Data de Nascimento</label>
							<input name="datanasc" type="date" class="form-control">
						</div>
						<div class="col-md-6" style="">
							<div>
								<label>Sexo</label>
							</div>
							<select name="sexo" style="height: 37px; width: 254px">
								<option>-</option>
								<option value="M">Masculino</option>
								<option value="F">Feminino</option>
							</select>
						</div>
					</div>
					<label>E-mail</label>
					<input name="email" type="email" class="form-control">
				</div>
			</div>	

			<div class="row">
				<div class="col-md-2 offset-md-5">		
					<button type="submit" class="btn btn-dark" style="width: 155px; margin-top: 20px">Cadastrar-se</button>
				</div>
			</div>
		</form>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>