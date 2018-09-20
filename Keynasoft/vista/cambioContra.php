<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="./js/code.js"></script>
    <link rel="stylesheet" href="../Css/cambioContra.css">
    <title>Recuperar Cuenta</title>



    
</head>
<body>
  <div class="container">

    <div class="form-signin" role="form">
      <h2 class="form-signin-heading"style="color:#163f70;">Recuperar cuenta</h2>
      <input type="text" id="correo" class="form-control" placeholder="Correo o usuario" required autofocus>
      <br>
      <input type="password" id="pass1" class="form-control" placeholder="Contraseña nueva" required autofocus>
      <br>
      <input type="password" id="pass2" class="form-control" placeholder="Repetir contraseña" required autofocus>
      <br>
      <button class="btn btn-lg btn-primary btn-block" id="btnCambCont" type="button">Aceptar</button>
    </div>
  </div>
  <div class="container" id="resultado"></div>
  <footer>
    <center>

    <p>Keynasoft, Copyright© 2018</p>  
  </footer>
</body>
</html>