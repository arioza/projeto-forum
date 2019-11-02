

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Esporte - Fórum</title>
	<link rel="shortcut icon" href="../images/icon.png"/>
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
							<a href="../painel.php">
								<img src="../images/logo-painel.png">		
							</a>
						</div>
						<div class="col-md-8" style="margin-top: 30px; padding-left: 0px">
							<h3>Fórum</h3>
						</div>
					</div>									
				</div>
				<div class="col-md-8">				
					<a href="https://apple.com" target="_blank"><img src="../images/banner-top.jpg"></a>
				</div>
				<hr>
			</div>
			<div class="row">
				<div class="col-md-12" style="margin-top: 10px;">
					<ul class="nav nav-tabs">
						<li class="nav-item dropdown" style="width: 25%; text-align: center;">
							<a class="nav-link dropdown-toggle btn-outline-primary" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
								<h7>Menu</h7>							
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="" onclick="dev()"><i class="fas fa-user"></i> Editar Perfil</a>
								<a class="dropdown-item" href="" onclick="dev()"><i class="fas fa-book-reader"></i> Meus Forúns</a>
								<a class="dropdown-item" data-toggle="modal" data-target="#sair"><i class="fas fa-door-open"></i> Sair</a>
							</div>
						</li>
						<li class="nav-item" style="width: 25%; text-align: center;">
							<a class="nav-link btn-outline-primary" href="../painel.php"><i class="fas fa-home"></i> Home</a>
						</li>
						<li class="nav-item" style="width: 25%; text-align: center;">
							<a class="nav-link btn-outline-primary" href="#" href="" onclick="dev()"><i class="fas fa-poll"></i> Trend Topics</a>
						</li>
						<form class="form-inline my-2 my-lg-0" style="width: 25%; padding-left: 5px">
							<input style="width: 80%" class="form-control mr-sm-2" type="search" placeholder="Pesquisar fóruns" aria-label="Pesquisar" onclick="dev()">
							<button class="btn btn-outline-primary my-2 my-sm-0" type="submit"><i class="fas fa-search"  onclick="dev()"></i></button>
						</form>
					</ul>				
				</div>
			</div>
			<div class="row" style="margin-top: 10px;">
				<div class="col-md-10" style="border-right: solid 1px #DEE1E6;">						
					<h1 style="text-align: center">Esporte</h1>		

					<div>
						<a href="#" style="text-align: left; color: black; font-weight: bold"><i class="fas fa-user-circle"></i> BELLAN</a>
						<p style="color: gray; font-size: 12px">  publicou 31.10.2019 - 19:35h</p>
						<p style="text-align: justify;">
						O que é Lorem Ipsum?</br>
						Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.
					</p>
					<a class="btn btn-secondary" data-toggle="modal" data-target="#responder" style="color: white">Responder</a>
					<hr>
				</div>

				<div>
					<a href="#" style="text-align: left; color: black; font-weight: bold"><i class="fas fa-user-circle"></i> MARCOS</a>
					<p style="color: gray; font-size: 12px">  publicou 31.10.2019 - 22:14h</p>
					<p style="text-align: justify;">
						Lorem ipsum euismod habitasse nec eros posuere risus class, nostra aptent integer dui integer malesuada litora, mollis sit at congue dolor aliquet purus. 
						nullam nisi elit et molestie justo velit aliquam conubia, at nec eros aliquet elit condimentum feugiat vestibulum, magna fringilla integer praesent senectus purus auctor. 
						lobortis viverra erat diam scelerisque hendrerit mollis fermentum volutpat rutrum nisi, donec augue luctus in ante cursus himenaeos odio ullamcorper sed, diam eros inceptos potenti pellentesque proin placerat hendrerit gravida. 
						curabitur nunc dictumst enim taciti ad torquent laoreet sapien, nostra conubia morbi dictumst inceptos facilisis nulla, magna in ante tortor consectetur hac egestas. 
					</p>
					<a class="btn btn-secondary" data-toggle="modal" data-target="#responder" style="color: white">Responder</a>
					<hr>
				</div>

				<div style="text-align: center">
					<div>
						<textarea name="comentário" rows="5" cols="40" placeholder="Digite aqui sua publicação!" onclick="dev()"></textarea>
					</div>
					<div>
						<a class="btn btn-primary" style="color: white" onclick="dev()" ><i class="fas fa-plus"></i> Publicar</a>					
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

<!--Inicio Modal Resposta -->
<div class="modal fade" id="responder" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="TituloModalCentralizado">Resposta</h5>
			</div>
			<div class="modal-content" style=" padding: 15px 15px 5px 15px">				
				<textarea name="comentário" rows="10" cols="40" placeholder="Digite aqui sua resposta!"></textarea>
			</div>
			<div class="modal-footer">					
				<button type="button" class="btn btn-primary" onclick="dev()"><a href="#" style="color: white">Publicar</a></button>
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