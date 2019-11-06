<?php
include('_verificaLogin.php');
include('conexao.php');

$sql = mysqli_query($conexao, "select * from usuarios where usuario = '$_SESSION[usuario]'");
while($exibe = mysqli_fetch_assoc($sql)){
	$nome = $exibe['nome'];
	$usuario = $exibe['usuario'];
	$senha = $exibe['senha'];
	$cep = $exibe['cep'];
	$cidade = $exibe['cidade'];
	$estado = $exibe['estado'];
	$datanasc = $exibe['datanasc'];
	$sexo = $exibe['sexo'];
	$email = $exibe['email'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Atualizar Cadastro - Fórum</title>
	<link rel="shortcut icon" href="images/icon.png"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/19ae817b2a.js" crossorigin="anonymous"></script>
	<script type="text/javascript">
		function dev(){
			alert("Botão em desenvolvimento!");
		}

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
	</script>
</head>
<body>
	<div>
		<div class="container">
			<div class="row" style="margin-top: 5px;">
				<div class="col-md-4">									
					<div class="row" style="margin-top: 5px;">
						<div class="col-md-4">
							<a href="painel.php">
								<img src="images/logo-painel.png">		
							</a>
						</div>
						<div class="col-md-8" style="margin-top: 30px; padding-left: 0px">
							<h3>Fórum</h3>
						</div>
					</div>									
				</div>
				<div class="col-md-8">				
					<a href="https://apple.com" target="_blank"><img src="images/banner-top.jpg"></a>
				</div>
				<hr>
			</div>
			<div class="row">
				<div class="col-md-12" style="margin-top: 10px;">
					<ul class="nav nav-tabs">
						<li class="nav-item dropdown" style="width: 25%; text-align: center;">
							<a class="nav-link dropdown-toggle btn-outline-primary" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
								Olá, <h7 style="text-transform: uppercase;"><?php echo $_SESSION['usuario'];?></h7>							
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="" onclick="dev()"><i class="fas fa-user"></i> Editar Perfil</a>
								<a class="dropdown-item" href="" onclick="dev()"><i class="fas fa-book-reader"></i> Meus Forúns</a>
								<a class="dropdown-item" data-toggle="modal" data-target="#sair"><i class="fas fa-door-open"></i> Sair</a>
							</div>
						</li>
						<li class="nav-item" style="width: 25%; text-align: center;">
							<a class="nav-link btn-outline-primary" href="painel.php"><i class="fas fa-home"></i> Home</a>
						</li>
						<li class="nav-item" style="width: 25%; text-align: center;">
							<a class="nav-link btn-outline-primary" href="#" href="" onclick="dev()"><i class="fas fa-poll"></i> Trend Topics</a>
						</li>
						<form class="form-inline my-2 my-lg-0" style="width: 25%; padding-left: 5px">
							<input style="width: 80%" class="form-control mr-sm-2" type="search" placeholder="Pesquisar fóruns" aria-label="Pesquisar" onclick="dev()">
							<button class="btn btn-outline-primary my-2 my-sm-0" type="submit" onclick="dev()"><i class="fas fa-search"></i></button>
						</form>
					</ul>				
				</div>
			</div>
			<div class="row" style="text-align: center; margin-top: 10px;">
				<div class="col-md-10" style="border-right: solid 1px #DEE1E6;">
					<h6>Atualizar Cadastro</h6>
					<form action="_atualizaUsuario.php" method="POST">
						<div class="row">
							<div class="col-md-6">
								<label>Nome</label>
								<input name="nome" type="text" class="form-control" value="<?php echo $nome ?>" autofocus required>
								<label>Usuário</label>
								<input name="usuario" type="text" class="form-control" value="<?php echo $usuario?>" readonly="true" required>

								<div class="row">
									<div class="col-md-6">
										<label>Senha</label>
										<input name="senha" id='senha' type="password" class="form-control" value="<?php echo $senha?>" required>
									</div>
									<div class="col-md-6">
										<label>Confirme a Senha</label>
										<input id="senha_confirma" type="password" class="form-control" value="<?php echo $senha?>" onblur="testaSenha();" required>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-4">						
										<label>CEP</label>
										<div>
											<input name="cep" class="form-control" type="text" id="cep" maxlength="9" value="<?php echo $cep?>" onblur="pesquisacep(this.value);" required>	
										</div>
									</div>
									<div class="col-md-5">
										<label>Cidade</label>
										<div>
											<input name="cidade" class="form-control" type="text" id="cidade" readonly="true" value="<?php echo $cidade?>">
										</div>
									</div>
									<div class="col-md-3">
										<label>Estado</label>
										<div>
											<input name="estado" class="form-control" type="text" id="uf" value="<?php echo $estado?>" readonly="true">
										</div>
									</div>
								</div>																	
								<div class="row">
									<div class="col-md-6">
										<label>Data de Nascimento</label>
										<input name="datanasc" type="date" class="form-control" value="<?php echo $datanasc?>" required>
									</div>
									<div class="col-md-6" style="">
										<div>
											<label>Sexo</label>
										</div>
										<select name="sexo" style="height: 37px; width: 200px" required>
											<?php 
											if($sexo == 'M'){
												echo"<option value='M' selected>Masculino</option>";
												echo"<option value='F'>Feminino</option>";
											} else {
												echo"<option value='M'>Masculino</option>";
												echo"<option value='F' selected>Feminino</option>";
											}
											?>
										</select>
									</div>
								</div>
								<label>E-mail</label>
								<input name="email" type="email" class="form-control" value="<?php echo $email?>" required>
							</div>
						</div>	

						<div class="row">
							<div class="col-md-4 offset-md-4">		
								<button type="submit" class="btn btn-dark" style="width: 200px; margin-top: 20px"><i class="fas fa-user-edit"></i> Atualizar Cadastro</button>
							</div>
						</div>
					</form>

					<div class="row">
						<div class="col-md-4 offset-md-4">
							<button data-toggle="modal" data-target="#deletar" class="btn btn-outline-danger" style="width: 155px; margin-top: 40px" ><i class="fas fa-user-slash"></i> Excluir Conta</button>
						</div>
					</div>


				</div>
				<div class="col-md-2" style="border-left: solid 1px #DEE1E6">
					<h6>Google Ads</h6>
					<hr style="width: 60%; margin-top: -0px">															
					<a href="https://www.netflix.com" target="_blank"><img style="width: 100%; margin: 15px 0px 15px 0px" src="https://i.pinimg.com/originals/17/50/07/17500708fecc58c74468cd7953284527.jpg"></a>
					
				</div>
			</div>
			
		</div>
	</div>

	<!--Inicio Modal Sair -->
	<div class="modal fade" id="sair" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="TituloModalCentralizado">Deseja realmente sair?</h5>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
					<button type="button" class="btn btn-primary"><a href="logout.php" style="color: white">Sair</a></button>
				</div>
			</div>
		</div>
	</div>
	<!--Fim Modal-->

	<!--Inicio Modal Deletar -->
	<div class="modal fade" id="deletar" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="TituloModalCentralizado">Deseja realmente excluir conta?</h5>
				</div>
				<div class="modal-content" style=" padding: 15px 15px 5px 15px">					
					<div style="font-size: 15px">
						<h6>Caso exclua sua conta:</h6>
						<p style="text-align: justify;">-Está ciente que suas contrinuições nos fóruns em que participou não serão excluídas;</p>
						<p style="text-align: justify;">-Não terá mais acesso a nenhum fórum;</p>
						<p style="text-align: justify;">-Não há possibilidade de reverter o processo de exclusão de conta;</p>
					</div>
					<p style="font-weight: bold; font-size: 14px; color: #A0A0A0;; text-align: center;">Lembre-se: Sua conta será excluída permanentemente.</p>
				</div>
				<div class="modal-footer">
					<form action="_excluirUsuario.php" method="POST">
						<button type="submit" name="usuario" value="<?php echo $usuario ?>" class="btn btn-secondary">Sim, desejo excluir minha conta</button>
					</form>
					<button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>
	<!--Fim Modal-->


	<footer>
		<hr style="width: 90%">
		<p style="text-align: right; color: #A0A0A0; margin-right: 5%;">Developed by Students of <a style="color: #A0A0A0;" target="_blank" href="http://portal.estacio.br/">Estácio de Sá</a></p>
	</footer>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>