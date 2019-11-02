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
				<div class="col-md-3" style="border-right: solid 1px #DEE1E6;">
					<h6>Match</h6>
					<hr style="width: 60%; margin-top: -0px">
				</div>
				<div class="col-md-7">
					<h6>Categorias</h6>
					<hr style="width: 50%; margin-top: -0px">
					<div style="margin-top: 30px;">
						<a style="width: 80%" class="btn btn-outline-secondary" data-toggle="modal" data-target="#tecnologia">Tecnologia</a>
						<i style="margin-left: 10px; height: 40px; padding-top: 10px" id="icon1" onclick="change('icon1')" class="btn btn-outline-success far fa-thumbs-up"> Like</i>
					</div>
					<div style="margin-top: 30px">
						<a style="width: 80%" class="btn btn-outline-secondary" data-toggle="modal" data-target="#religiao">Religião</a>
						<i style="margin-left: 10px; height: 40px; padding-top: 10px" id="icon2" onclick="change('icon2')" class="btn btn-outline-success far fa-thumbs-up"> Like</i>
					</div>
					<div style="margin-top: 30px">
						<a style="width: 80%" class="btn btn-outline-secondary" data-toggle="modal" data-target="#politica">Política</a>
						<i style="margin-left: 10px; height: 40px; padding-top: 10px" id="icon3" onclick="change('icon3')" class="btn btn-outline-success far fa-thumbs-up"> Like</i>
					</div>
					<div style="margin-top: 30px">
						<a style="width: 80%" class="btn btn-outline-secondary" data-toggle="modal" data-target="#esporte">Esporte</a>
						<i style="margin-left: 10px; height: 40px; padding-top: 10px" id="icon4" onclick="change('icon4')" class="btn btn-outline-success far fa-thumbs-up"> Like</i>
					</div>
					<div style="margin-top: 30px">
						<a style="width: 80%" class="btn btn-outline-secondary" data-toggle="modal" data-target="#carro">Carro</a>
						<i style="margin-left: 10px; height: 40px; padding-top: 10px" id="icon5" onclick="change('icon5')" class="btn btn-outline-success far fa-thumbs-up"> Like</i>
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

	<!--Inicio Modal Fórum Tecnologia -->
	<div class="modal fade" id="tecnologia" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="TituloModalCentralizado">Tecnologia</h5>
				</div>
				<div class="modal-content" style=" padding: 15px 15px 5px 15px">				
					<p style="text-align: justify;">Tecnologia é um termo que envolve o conhecimento técnico e científico e a aplicação deste conhecimento através de sua transformação no uso de ferramentas, processos e materiais criados e utilizados a partir de tal conhecimento</p>
					<p style="font-weight: bold; font-size: 10px; color: #A0A0A0;; text-align: center;">O Fórum de Tecnologia é destinado a tratar assuntos especificamentes sobre tecnologia.</p>
				</div>
				<div class="modal-footer">					
					<button type="button" class="btn btn-primary"><a href="foruns/tecnologia.php" style="color: white">Acessar</a></button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>
	<!--Fim Modal-->

	<!--Inicio Modal Fórum Religião -->
	<div class="modal fade" id="religiao" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="TituloModalCentralizado">Religião</h5>
				</div>
				<div class="modal-content" style=" padding: 15px 15px 5px 15px">				
					<p style="text-align: justify;">Religião é um conjunto de sistemas culturais e de crenças, além de visões de mundo, que estabelece os símbolos que relacionam a humanidade com a espiritualidade e seus próprios valores morais. Muitas religiões têm narrativas, símbolos, tradições e histórias sagradas que se destinam a dar sentido à vida ou explicar a sua origem e do universo. As religiões tendem a derivar a moralidade, a ética, as leis religiosas ou um estilo de vida preferido de suas ideias sobre o cosmos e a natureza humana.</p>
					<p style="font-weight: bold; font-size: 10px; color: #A0A0A0;; text-align: center;">O Fórum de Tecnologia é destinado a tratar assuntos especificamentes sobre religião.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary"><a href="foruns/religiao.php" style="color: white">Acessar</a></button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>
	<!--Fim Modal-->

	<!--Inicio Modal Fórum Política -->
	<div class="modal fade" id="politica" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="TituloModalCentralizado">Política</h5>
				</div>
				<div class="modal-content" style=" padding: 15px 15px 5px 15px">					
					<p style="text-align: justify;">Política denomina-se a arte ou ciência da organização, direção e administração de nações ou Estados; a aplicação desta ciência aos assuntos internos da nação (política interna) ou aos assuntos externos (política externa). Nos regimes democráticos, a ciência política é a atividade dos cidadãos que se ocupam dos assuntos públicos com seu voto ou com sua militância.</p>
					<p style="font-weight: bold; font-size: 10px; color: #A0A0A0;; text-align: center;">O Fórum de Política é destinado a tratar assuntos especificamentes sobre política.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary"><a href="foruns/politica.php" style="color: white">Acessar</a></button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>
	<!--Fim Modal-->

		<!--Inicio Modal Fórum Esporte -->
	<div class="modal fade" id="esporte" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="TituloModalCentralizado">Esporte</h5>
				</div>
				<div class="modal-content" style=" padding: 15px 15px 5px 15px">					
					<p style="text-align: justify;">Esporte é toda a forma de praticar atividade física, de forma metódica, com objetivos competitivos, que por meio de participação casual ou organizada, procure usar, manter ou melhorar as habilidades físicas, proporcionando diversão aos participantes e, em alguns casos, entretenimento para os espectadores.</p>
					<p style="font-weight: bold; font-size: 10px; color: #A0A0A0;; text-align: center;">O Fórum de Esporte é destinado a tratar assuntos especificamentes sobre esporte.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary"><a href="foruns/esporte.php" style="color: white">Acessar</a></button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>
	<!--Fim Modal-->

		<!--Inicio Modal Fórum Carro -->
	<div class="modal fade" id="carro" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="TituloModalCentralizado">Carros</h5>
				</div>
				<div class="modal-content" style=" padding: 15px 15px 5px 15px">					
					<p style="text-align: justify;">Automóvel (do grego αὐτός ["autós"], "por si próprio", e do latim mobilis, "mobilidade", como referência a um objecto responsável pela sua própria locomoção) ou carro (das línguas celtas, através do latim carru) é um veículo motorizado com rodas usado para transporte. A maioria das definições de carro diz que eles correm basicamente em estradas, acomodam de uma a oito pessoas, têm quatro pneus e, principalmente, transportam pessoas em vez de mercadorias.</p>
					<p style="font-weight: bold; font-size: 10px; color: #A0A0A0;; text-align: center;">O Fórum de Carros é destinado a tratar assuntos especificamentes sobre carros.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary"><a href="foruns/carro.php" style="color: white">Acessar</a></button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
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