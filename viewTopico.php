<?php
include('_verificaLogin.php');
include('conexao.php');

$idTopico = mysqli_real_escape_string($conexao, $_POST['id']);

$sql1 = mysqli_query($conexao, "select * from topicos where id = '{$idTopico}'");
while($exibe = mysqli_fetch_assoc($sql1)){
	$id = $exibe['id'];
	$idAdm = $exibe['idAdm'];
	$categoria = $exibe['categoria'];
	$nome = $exibe['nome'];
	$detalhe = $exibe['detalhe'];
}

$sql2 = mysqli_query($conexao, "select * from comentarios where idTopico = '{$idTopico}' order by data");
while($exibe = mysqli_fetch_assoc($sql2)){
	$usuario = $exibe['usuario'];
	$comentario = $exibe['comentario'];
	$data = $exibe['data'];
}

$sql3 = mysqli_query($conexao, "select * from usuarios where id = '{$idAdm}'");
while($exibe = mysqli_fetch_assoc($sql3)){
	$nomeAdm = $exibe['nome'];
}

$sql4 = mysqli_query($conexao, "select * from usuarios where usuario = '{$_SESSION[usuario]}'");
while($exibe = mysqli_fetch_assoc($sql4)){
	$idComentador = $exibe['id'];
}


$query = "select * from comentarios where idTopico = '$idTopico'";
$result = $conexao -> query($query) or die ("erro");
$row = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title><?php echo $nome?></title>
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
							<a class="dropdown-item" href="meusTopicos.php"><i class="fas fa-book-reader"></i> Meus Forúns</a>
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
						<button class="btn btn-outline-primary my-2 my-sm-0" type="submit"><i class="fas fa-search"  onclick="dev()"></i></button>
					</form>
				</ul>				
			</div>
		</div>
		<div class="row" style="margin-top: 10px;">
			<div class="col-md-10" style="border-right: solid 1px #DEE1E6;">						
				<h3 style="text-align: center"><?php echo $nome?></h3>		
				<h6 style="text-align: center">Criado por: <?php echo $nomeAdm?></h6>		
				<h6 style="text-align: center; color: #A0A0A0"><?php echo $categoria?></h6>
				<div>
					<?php	
					if($row == 0){	
						echo "<h5 style='text-align: center; margin: 10% 0 10% 0'>Nenhum registro encontrado!</h5>";								
					}else{
						while($dado = $result -> fetch_array()){
							$sql5 = mysqli_query($conexao, "select usuario from usuarios where id = ".$dado['idComentador']);
							while($exibe = mysqli_fetch_assoc($sql5)){
								$comentador = $exibe['usuario'];
							}
							echo"
							<div>
							<h6 style='text-align: left; color: black; font-weight: bold'><i class='fas fa-user-circle'></i> $comentador</h6>
							<p style='color: gray; font-size: 12px'>  publicou ".date("d/m/Y H:i:s", strtotime($dado['data']))."</p>
							<p style='text-align: justify;'>".$dado['comentario']."</p>
							<hr>
							</div>
							";
						}
					}
					?>
				</div>
				<div style="text-align: center">
					<!--<form action="_cadastraComentario.php" method="POST">-->
						<div>
							<textarea name="comentario" rows="5" cols="40" placeholder="Digite aqui seu comentário!"></textarea>
							<p name="idTopico" value="<?php echo $idTopico?>"/>
						</div>
						<button  name="idComentador" value="<?php echo  $idComentador?>" onclick="dev()" class="btn btn-primary"><i class="fas fa-plus"></i> Publicar</button>
					<!--</form>-->
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