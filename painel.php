<?php
include('_verificaLogin.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Painel - Fórum</title>
	<link rel="shortcut icon" href="images/icon.png"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/19ae817b2a.js" crossorigin="anonymous"></script>
	<script type="text/javascript">
		function dev(){
			alert("Botão em desenvolvimento!");
		}

		function change(iconID){
			if(document.getElementById(iconID).className=="btn btn-outline-success far fa-thumbs-up"){
				document.getElementById(iconID).className = "btn btn-outline-danger far fa-thumbs-down";
				document.getElementById(iconID).innerHTML=" Dislike";
				alert("O Match com este fórum depende da aprovação do administrador do fórum.")
			}else{
				document.getElementById(iconID).className = "btn btn-outline-success far fa-thumbs-up";
				document.getElementById(iconID).innerHTML=" Like";
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
				<div class="col-md-3" style="border-right: solid 1px #DEE1E6;">
					<h6>Match</h6>
					<hr style="width: 60%; margin-top: -0px">
				</div>
				<div class="col-md-7">
					<h6>Categorias</h6>
					<hr style="width: 50%; margin-top: -0px">
					<form action="categoriaTopicos.php" method="POST">
						<button type="submit" name="categoria" value="Tecnologia" class="btn btn-outline-primary" style="width: 100%; margin-top: 20px">Tecnologia</button>
					</form>
					<form action="categoriaTopicos.php" method="POST">
						<button type="submit" name="categoria" value="Política" class="btn btn-outline-primary" style="width: 100%; margin-top: 20px">Política</button>
					</form>
					<form action="categoriaTopicos.php" method="POST">
						<button type="submit" name="categoria" value="Esporte" class="btn btn-outline-primary" style="width: 100%; margin-top: 20px">Esporte</button>
					</form>
					<form action="categoriaTopicos.php" method="POST">
						<button type="submit" name="categoria" value="Ciência" class="btn btn-outline-primary" style="width: 100%; margin-top: 20px">Ciência</button>
					</form>
					<form action="categoriaTopicos.php" method="POST">
						<button type="submit" name="categoria" value="Religião" class="btn btn-outline-primary" style="width: 100%; margin-top: 20px">Religião</button>
					</form>
					<form action="categoriaTopicos.php" method="POST">
						<button type="submit" name="categoria" value="Automóveis" class="btn btn-outline-primary" style="width: 100%; margin-top: 20px">Automóveis</button>
					</form>
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

	<footer>
		<hr style="width: 90%">
		<p style="text-align: right; color: #A0A0A0; margin-right: 5%;">Developed by Students of <a style="color: #A0A0A0;" target="_blank" href="http://portal.estacio.br/">Estácio de Sá</a></p>
	</footer>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>