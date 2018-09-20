<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="../Css/bienes.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <title>Insertar bienes</title>
</head>

<body>

  <nav class="navbar navbar-expand-sm" >

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
    <li  class="nav-item dropdown">
      <a  class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Otros
      </a>
      <div class="dropdown-menu">
        <a  class="dropdown-item" href="perfil.php">Perfil</a> <!-- En el perfil se muestra la informacion del usuario y sus bienes registrados-->
        <a style="color: #ffffff;" class="dropdown-item" href="reportarRobo.php">Reportar robo</a>
        <a style="color: #ffffff;" class="dropdown-item" href="index.php">Iniciar sesion</a>
        <a style="color: #ffffff;" class="dropdown-item" href="insertarUsuarios.php">Registrar</a>
      </div>
    </li>
  </ul>
</nav>
<br>



  <script>
    $(function () {
    $.datepicker.setDefaults($.datepicker.regional["es"]);
    $("#Fecha").datepicker({
    firstDay: 1
    });
    });
  </script>

    <section>
        <div class="col-md-9" style="margin:0.011%; padding: 3%;">
          <div class"form">
            <form>
              <div><h2>Registrar Bienes</h2></div>
              <div class="form-group">
                <label for="InputNombre" class="col-sm-2 col-form-label">Nombre Producto</label>
                <input type="text" class="form-control" id="nombreArticulo"  placeholder="Nombre Producto">
              </div>
              <div class="form-group">
                <label for="InputDescripcion" class="col-sm-2 col-form-label">Descripción</label>
                <input type="text" class="form-control" id="descripcion" placeholder="Descripción">
              </div>
              <div class="form-group">
                <label for="InputFecha" class="col-sm-2 col-form-label">Fecha de compra</label>
                <input type="text" class="form-control" id="fecha" placeholder="Fecha de compra" />
              </div>
              <div class="form-group">
                <label for="InputLugar" class="col-sm-2 col-form-label">Lugar de Compra</label>
                <input type="text" class="form-control" id="direccion" placeholder="Lugar de compra">
              </div>
              <label for="InputFactura" class="col-sm-2 col-form-label">Adjuntar Factura</label><br>
              <input type="file" id="imagen" accept="image/*"/>
              <div class="container"style="text-align: left; display: inline-block; padding-top: 33px;">
                <div class="dropdown dropright">
                  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Marcas
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Apple</a>
                    <a class="dropdown-item" href="#">Microsoft</a>
                    <a class="dropdown-item" href="#">Samsung</a>
                    <a class="dropdown-item" href="#">Toshiba</a>
                    <a class="dropdown-item" href="#">Asus</a>
                    <a class="dropdown-item" href="#">Alienware</a>
                    <a class="dropdown-item" href="#">Gateway</a>
                    <a class="dropdown-item" href="#">Lanix</a>
                    <a class="dropdown-item" href="#">LG</a>
                    <a class="dropdown-item" href="#">Motorola</a>
                    <a class="dropdown-item" href="#">Huawei</a>
                    <a class="dropdown-item" href="#">Nokia</a>
                    <a class="dropdown-item" href="#">Sony</a>
                    <a class="dropdown-item" href="#">Alcatel</a>
                    <a class="dropdown-item" href="#">BlackBerry</a>
                    <a class="dropdown-item" href="#">Sony Ericsson</a>
                    <a class="dropdown-item" href="#">HTC</a>
                    <a class="dropdown-item" href="#">ZTE</a>
                    <a class="dropdown-item" href="#">Predator</a>
                  </div>
                </div>
            </div>
            <div class="form-group">
              <label for="InputMarcas" class="col-sm-2 col-form-label">Otras marcas:</label>
              <input type="text" class="form-control" id="marca" placeholder="Otras Marcas">
            </div>
            <div class="form-group">
              <label for="InputSerie" class="col-sm-2 col-form-label">Numero de serie</label>
              <input type="text" class="form-control" id="numSerie" placeholder="Numero de serie">
            </div>
            <div class="form-group">
              <label for="InputModelo" class="col-sm-2 col-form-label">Modelo</label>
              <input type="text" class="form-control" id="modelo" placeholder="Modelo">
            </div>
            
            <hr class="mb-4">
            <button type="submit" class="btn btn-primary" id="btnInsertar">Agregar</button><br>
          </form>
          </div>
          <div id="resultado"></div>
        </div>
  </div>

  </section>

  <footer>
    <div>
      <a href="https://www.facebook.com/Keynasoft">
      <img src="../img/facebook.png" width="60" height="60"/></a>
      <a href="https://www.instagram.com/Keynasoft">
      <img src="../img/Instagram.png" width="60" height="60"/></a>
      <a href="https://www.twitter.com/Keynasoft">
      <img src="../img/Twitter.png" width="60" height="60"/></a>
      <a href="https://www.skype.com/Keynasoft">
      <img src="../img/Skype.png" width="60" height="60"/></a>
      <a href="https://www.whatsapp.com/Keynasoft">
      <img src="../img/Whatsapp.png" width="60" height="60"/></a>
      
      <p>Keynasoft, Copyright© 2018</p>
    </div>
  </footer>
</body>
</html>