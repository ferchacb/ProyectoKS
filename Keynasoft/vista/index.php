<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Iniciar Sesión</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../Css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="./js/code.js"></script>


</head>

<body>
  <div class="container">
    <center>

      <body>
        <nav class="navbar navbar-expand-sm">

          <!-- Brand -->
          <a style="color: #ffffff;" class="navbar-brand" href="#">Keynasoft</a>

          <!-- Links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a style="color: #ffffff;" class="nav-link" href="home.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a style="color: #ffffff;" class="nav-link" href="insertarBienes.php">Registrar Bienes</a>
            </li>

            <!-- Dropdown -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Otros
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="perfil.php">Perfil</a>
                <!-- En el perfil se muestra la informacion del usuario y sus bienes registrados-->
                <a style="color: #ffffff;" class="dropdown-item" href="reportarRobo.php">Reportar robo</a>
                <a style="color: #ffffff;" class="dropdown-item" href="index.php">Iniciar sesion</a>
                <a style="color: #ffffff;" class="dropdown-item" href="insertarUsuarios.php">Registrar</a>
              </div>
            </li>
          </ul>
        </nav>
        <br>
        <div class="container" style="margin:0.011%; padding: 3%;">
          <div class="form-signin" role="form">
            <h2 class="form-signin-heading" style="color:#163f70;">Iniciar Sesión</h2>
            <input type="text" id="usuario" class="form-control" placeholder="usuario" required autofocus style>
            <input type="password" id="clave" class="form-control" placeholder="contraseña" required>
            <button class="btn btn-lg btn-primary btn-block" id="singin" type="button">Ingresar</button>
            <p style="color:#163f70;">¿No tienes una cuenta? <a href="insertarUsuarios.php">Regístrate ahora.</a></p>
            <p style="color:#163f70;">¿Olvidaste tu contraseña? <a href="cambioContra.php">Restablecer contraseña.</a></p>
          </div>
        </div>
        <div class="container" id="resultado">
        </div>

        <footer>

          <p>Keynasoft, Copyright© 2018</p>
        </footer>

      </body>

</html>