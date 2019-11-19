<?php
include('_verificaLogin.php');
include('conexao.php');

$categoria = mysqli_real_escape_string($conexao, $_POST['categoria']);

$select = mysqli_query ($conexao, "select categoria from topicos where categoria = '{$categoria}'") or die(mysqli_error($conexao));
while($exibe = mysqli_fetch_assoc($select)){
	$category = $exibe['categoria'];
}

$query = "select * from topicos where categoria = '$categoria'";
$result = $conexao -> query($query) or die ("erro");
$row = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title><?php echo $category?></title>
	<link rel="shortcut icon" href="images/icon.png"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/19ae817b2a.js" crossorigin="anonymous"></script>
		<script type="text/javascript">
		function dev(){
			alert("Botão em desenvolvimento!");
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
								<a class="dropdown-item" href="atualizaUsuario.php"><i class="fas fa-user"></i> Editar Perfil</a>
								<a class="dropdown-item" href="meusTopicos.php"><i class="fas fa-book-reader"></i> Meus Tópicos</a>
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
					<h4><?php echo $category?></h4>
					<hr style="width: 30%; margin-top: -0px">
					<div style="margin-top: 20px">	
						<?php	
						if($row == 0){	
							echo "<h5 style='text-align: center; margin-top:18%'>Nenhum registro encontrado!</h5>";								
							
						}	
						else{
							while($dado = $result -> fetch_array()){
								echo "			
								<form action='viewTopico.php' method='POST'>									
									<button type='submit' style='width:80%; margin-top:10px; height: 85px' href='#' class='btn btn-outline-success' name='id' value='".$dado['id']."'>
										<div class='row'>
											<div class='col-md-12' style='text-align:center'>															
												<h4>".$dado['nome']."</h4>
												<p style='font-size: 12px'>Categoria: ".$dado['categoria']."</p>
												<p style='font-size: 10px; margin-top:-15px'>Criado em: ".date("d/m/Y H:i:s", strtotime($dado['data']))."</p>
											</div>
										</div>
									</button>									
								</form>	
								";
							}
						}
						?>
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

	<footer style="margin-top: -5px">
		<hr style="width: 90%">
		<p style="text-align: right; color: #A0A0A0; margin-right: 5%;">Developed by Students of <a style="color: #A0A0A0;" target="_blank" href="http://portal.estacio.br/">Estácio de Sá</a></p>
	</footer>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>