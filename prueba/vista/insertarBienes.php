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
  <link rel="stylesheet" href="../Css/bienes.css">


  <title>Insertar bienes</title>
</head>
<body>

  <nav class="navbar navbar-expand-sm" >

  <!-- Brand -->
  <a style="color: #ffffff;" class="navbar-brand" href="#">Keynasoft</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a style="color: #ffffff;" class="nav-link" href="#">Inicio</a>
    </li>
    <li class="nav-item">
      <a style="color: #ffffff;" class="nav-link" href="#">Registrar Bienes</a>
    </li>

    <!-- Dropdown -->
    <li  class="nav-item dropdown">
      <a  class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Otros
      </a>
      <div class="dropdown-menu">
        <a  class="dropdown-item" href="#">Perfil</a> <!-- En el perfil se muestra la informacion del usuario y sus bienes registrados-->
        <a style="color: #ffffff;" class="dropdown-item" href="#">Reportar robo</a>
        <a style="color: #ffffff;" class="dropdown-item" href="#">Link 3</a>
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
      <div class"contenedor" style="text-align: left; display: inline-block; margin-left: 33.5%; margin-right:33.5%">
        <div class"centro">
          <div class"form">
            <form>
              <div style="text-align: center; display: inline-block; padding-top: 43px;"><h2>Registrar Bienes</h2></div>
              <div class="form-group">
                <label for="">Nombre Producto</label>
                <input type="text" class="form-control" id="nombreArticulo"  placeholder="Nombre Producto">
              </div>
              <div class="form-group">
                <label for="">Descripción</label>
                <input type="text" class="form-control" id="descripcion" placeholder="Descripción">
              </div>
              <div class="form-group">
                <label for="">Fecha de compra</label>
                <input type="text" class="form-control" id="fecha" placeholder="Fecha de compra" />
              </div>
              <div class="form-group">
                <label for="">Lugar de Compra</label>
                <input type="text" class="form-control" id="direccion" placeholder="Lugar de compra">
              </div>
              <label for="">Adjuntar Factura</label><br>
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
              <label for="">Otras marcas:</label>
              <input type="text" class="form-control" id="marca" placeholder="Otras Marcas">
            </div>
            <div class="form-group">
              <label for="">Numero de serie</label>
              <input type="text" class="form-control" id="numSerie" placeholder="Numero de serie">
            </div>
            <div class="form-group">
              <label for="">Modelo</label>
              <input type="text" class="form-control" id="modelo" placeholder="Modelo">
            </div>
            <button type="submit" class="btn btn-primary" id="btnInsertar">Agregar</button><br>
          </form>
          </div>
          <div id="resultado"></div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div>
      <a href="https://www.facebook.com/Keynasoft">
      <img src="../img/444facebook.png"></a>
      <a href="https://www.instagram.com/Keynasoft">
      <img src="../img/tttinstagram.png"></a>
      
      <p>Keynasoft, Copyright© 2018</p>
    </div>
  </footer>
</body>
</html>