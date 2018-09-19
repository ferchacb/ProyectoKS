<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <script type="text/javascript" src="js/code.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="../Css/style.css">

</head>
<body>
	<div class="container">

<center>	

<body>



    <div class="container"style="text-align: center; display: inline-block; padding-top: 100px; widht: 2%;">
        <div class="form-signin" role="form">
            <h2 class="form-signin-heading">Iniciar Sesión</h2>
            <input type="text" id="usuario" class="form-control" placeholder="usuario" required autofocus style>
            <input type="password" id="clave" class="form-control" placeholder="contraseña" required>
            <button class="btn btn-lg btn-primary btn-block" id="singin" type="button">Ingresar</button>
            <p>No tienes una cuenta? <a href="insertarUsuarios.php">Regístrate ahora.</a></p>
            <p>Olvidaste tu contraseña? <a href="insertarUsuarios.php">Restablecer contraseña.</a></p>
        </div>
    </div>
    <div class="container" id="resultado">
    </div>

    <footer>
    <div>
      <a href="https://www.facebook.com/Keynasoft">
      <img src="../img/eeefacebook.png"></a>
      <a href="https://www.instagram.com/Keynasoft">
      <img src="../img/eeinstagram.png"></a>
      
      <p>Keynasoft, Copyright© 2018</p>
    </div>
  </footer>

</body>
</html>