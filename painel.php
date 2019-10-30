<?php
include('verifica_login.php');
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
	</script>
</head>
<body>
	<div style="width: 100%; height: 100%">
		<div class="container">
			<div class="row">
				<div class="col-md-12" style="margin-top: 30px;">
					<ul class="nav nav-tabs">
						<li class="nav-item dropdown" style="width: 20%; text-align: center;">
							<a class="nav-link dropdown-toggle btn-outline-primary" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
								Olá, <h7 style="text-transform: uppercase;"><?php echo $_SESSION['usuario'];?></h7>							
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="" onclick="dev()"><i class="fas fa-user"></i> Editar Perfil</a>
								<a class="dropdown-item" href="" onclick="dev()"><i class="fas fa-book-reader"></i> Meus Forúns</a>
								<a class="dropdown-item" data-toggle="modal" data-target="#sair"><i class="fas fa-door-open"></i> Sair</a>
							</div>
						</li>
						<li class="nav-item" style="width: 17%; text-align: center;">
							<a class="nav-link btn-outline-primary" href="painel.php"><i class="fas fa-home"></i> Home</a>
						</li>
						<li class="nav-item" style="width: 19%; text-align: center;">
							<a class="nav-link btn-outline-primary" href="#" href="" onclick="dev()"><i class="fas fa-bookmark"></i> Categorias</a>
						</li>
						<li class="nav-item" style="width: 19%; text-align: center;">
							<a class="nav-link btn-outline-primary" href="#" href="" onclick="dev()"><i class="fas fa-poll"></i> Trend Topics</a>
						</li>
						<form class="form-inline my-2 my-lg-0" style="width: 25%;">
							<input class="form-control mr-sm-2" type="search" placeholder="Pesquisar fóruns" aria-label="Pesquisar">
							<button class="btn btn-outline-primary my-2 my-sm-0" type="submit"><i class="fas fa-search"  onclick="dev()"></i></button>
						</form>
					</ul>				
				</div>
			</div>
			<div class="row" style="text-align: center; margin-top: 10px;">
				<div class="col-md-3" style="border-right: solid 1px #DEE1E6;">
					<h6>Match</a></a></h6>
					<hr style="width: 60%; margin-top: -0px">
				</div>
				<div class="col-md-7">
					<h6>Fóruns</h6>
					<hr style="width: 50%; margin-top: -0px">
					<a class="dropdown-item" data-toggle="modal" data-target="#tecnologia" href="foruns/tecnologia.php">Fórum Tecnologia</a>
				</div>
				<div class="col-md-2" style="border-left: solid 1px #DEE1E6">
					<h6>Google Ads</h6>
					<hr style="width: 60%; margin-top: -0px">
					<div style="width: 100%; border-style: solid 1px">
						<p style="font-size: 12px">Área para propaganda</p>
						<p style="font-size: 12px">Área para propaganda</p>
						<p style="font-size: 12px">Área para propaganda</p>
						<p style="font-size: 12px">Área para propaganda</p>
						<p style="font-size: 12px">Área para propaganda</p>
						<p style="font-size: 12px">Área para propaganda</p>
						<p style="font-size: 12px">Área para propaganda</p>
						<p style="font-size: 12px">Área para propaganda</p>
						<p style="font-size: 12px">Área para propaganda</p>
						<p style="font-size: 12px">Área para propaganda</p>
						<p style="font-size: 12px">Área para propaganda</p>
						<p style="font-size: 12px">Área para propaganda</p>
					</div>
				</div>
			</div>
			<hr>
			<p style="text-align: right; color: #A0A0A0; margin-right: 10px; margin-top: -8px">Developed by Students of Estácio de Sá</p>
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

<!--Inicio Modal Fórum Tecnologia -->
	<div class="modal fade" id="tecnologia" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="TituloModalCentralizado">Tecnologia</h5>
				</div>
				<div class="modal-content">
					<p style="text-align: justify; padding-top: 5px">O Fórum de Tecnologia é destinado a tratar assuntos especificamentes sobre tecnologia.</p>
					<p style="text-align: justify;">Tecnologia é um termo que envolve o conhecimento técnico e científico e a aplicação deste conhecimento através de sua transformação no uso de ferramentas, processos e materiais criados e utilizados a partir de tal conhecimento</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
					<button type="button" class="btn btn-primary"><a href="foruns/tecnologia.php" style="color: white">Acessar</a></button>
				</div>
			</div>
		</div>
	</div>
<!--Fim Modal-->

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>