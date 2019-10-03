<!DOCTYPE html>
<html>
<head>
  <title>Sistema de Login</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">
    <div class="box">
      <h1>Login</h1>
      <form action="comprovar-login.php" method="post">
      <div class="form-group">
      <input type="email" class="form-control" id="nome" placeholder="E-mail" name="nome" >
      </div>
      <div class="form-group">
      <input type="password" class="form-control" id="password" placeholder="Password" name="password">

      <div class="buttonStyle">
        <button type="submit" class="btn btn-primary">Entrar</button>
        <button type="submit" class="btn btn-link">Cadastrar-se</button>
      </div>  
    </div>  
  </div>
  <div>
  
  </div>
</form>
</div>
</body>
</html>
