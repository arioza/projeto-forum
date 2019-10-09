<!DOCTYPE html>
<html>
<head>
    <title>Cadastro - Fórum</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <section class="login-block">
        <div class="container">
            <div class="row">
                <div class="col-md-12 login-sec">
                    <h2 class="text-center">Cadastre-se</h2>
                </div>

                <div class="col-md-6">                    
                    <form class="login-form">
                        <div class="form-group">
                            <label class="text-uppercase">Nome</label>
                            <input type="text" class="form-control">
                            </br>
                            <label class="text-uppercase">Senha</label>
                            <input type="password" class="form-control">
                            </br>
                            <label class="text-uppercase">Data de Nascimento</label>
                            <input type="date" class="form-control">
                        </div>
                    </form>

                </div>

                <div class="col-md-6">
                    <form class="login-form">                                
                        <div class="form-group">
                            <label class="text-uppercase">E-mail</label>
                            <input type="email" class="form-control">
                            </br>
                            <label class="text-uppercase">Confirme a Senha</label>
                            <input type="password" class="form-control">
                            </br>
                            <label class="text-uppercase">Sexo</label>                                 
                            <div>                      
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="m" checked>
                                    <label class="form-check-label">Masculino</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="f">
                                    <label class="form-check-label">Feminino</label>
                                </div>                            
                            </div>
                        </div>
                    </form>
                </div>
                
                <div class="col-md-12">
                    </br>
                    <button class="btn btn-login">Cadastrar</button>  
                    </br></br>                                             
                </div>
            </div>
    </section>
</body>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>