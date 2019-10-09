<!DOCTYPE html>
<html>
<head>
    <title>Login - Fórum</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <section class="login-block">
        <div class="container">
            <div class="row">
                <div class="col-md-4 login-sec">
                    <h2 class="text-center">Faça Login</h2>
                    <form class="login-form">
                        <div class="form-group">
                            <label class="text-uppercase">E-mail</label>
                            <input type="email" class="form-control" placeholder="">

                        </div>
                        <div class="form-group">
                            <label class="text-uppercase">Senha</label>
                            <input type="password" class="form-control" placeholder="">
                        </div>
                    </br>
                        <div>
                            <button id="botaoEntrar" class="btn btn-login">Entrar</button>                                               
                        </div>
                        <div>
                            <a href="cadastro.php" class="btn btn-link" style="display:block; margin-left: auto; margin-right: auto;">Cadastre-se</a>
                        </div>

                    </form>

                </div>
                <div class="col-md-8 banner-sec">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="d-block img-fluid" src="https://static.pexels.com/photos/33972/pexels-photo.jpg" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <div class="banner-text">
                                        <h2>Bem Vindo</h2>
                                        <p>Respeite, interaja e divirta-se!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="https://images.pexels.com/photos/7097/people-coffee-tea-meeting.jpg" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <div class="banner-text">
                                        <h2>Bem Vindo</h2>
                                        <p>Respeite, interaja e divirta-se!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="https://images.pexels.com/photos/872957/pexels-photo-872957.jpeg" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <div class="banner-text">
                                        <h2>Bem Vindo</h2>
                                        <p>Respeite, interaja e divirta-se!</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </section>
</body>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>