<?php
session_start();
include('verifica_login.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf8">
	<title>Painel - Fórum</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<script type="text/javascript" >

		function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.            
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");            
        }

        function meu_callback(conteudo) {
        	if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.            
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);            
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }

    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.                
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";                

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

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
							<input name="senha" type="password" class="form-control" required>
						</div>
						<div class="col-md-6">
							<label>Confirme a Senha</label>
							<input type="password" class="form-control" required>
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
								<input name="cidade" class="form-control" type="text" id="cidade">
							</div>
						</div>
						<div class="col-md-2">
							<label>Estado</label>
							<div>
								<input name="estado" class="form-control" type="text" id="uf">
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