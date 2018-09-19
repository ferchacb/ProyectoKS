<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Registro</title>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../Css/usuario.css">

<style type="text/css">
.shell {
  position: relative;
  line-height: 1; }
  .shell span {
        position: relative;
    left: -20px;
    top: 30px;
    color: #ccc;
    pointer-events: none;
    z-index: -1;}
    .shell span i {
      font-style: normal;
      /* any of these 3 will work */
      color: transparent;
      opacity: 0;
      visibility: hidden; }

input.masked,
.shell span {
  font-family: monospace;
  padding-right: 10px;
  background-color: transparent;
  text-transform: uppercase; }
}
  </style>

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
function validarNumero(e){
    tecla = (document.all) ? e.keyCode : e.which;
    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
function validarletra(e) { 
  tecla = (document.all) ? e.keyCode : e.which; 
  if (tecla==8) return true; 
  patron =/[A-Za-z\s]/; 
  te = String.fromCharCode(tecla); 
  return patron.test(te); 
}
</script>


<body class="bg-light">

    <div class="container"style="text-align: left; display: flex; padding-top: 33px;">
        <div class="col-md-8 order-md-1">
          <h3 class="mb-3">Registro</h3>
          <form class="needs-validation" novalidate>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Nombre</label>
                <input type="text" class="form-control" id="nombre" placeholder="" value="" required>
                <div class="invalid-feedback">
                 Nombre requerido o invalido.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Apellido</label>
                <input type="text" class="form-control" id="apellido" placeholder="" value="" required>
                <div class="invalid-feedback">
                 Apellido requerido o invalido.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="">Cédula</label>
              <input id="cc"  type="tel" class="form-control masked" name="cedula" placeholder="X XXXX XXXX" required pattern="\d{1} \d{4} \d{4}">
              <div class="invalid-feedback">
                 Cédula requerido o invalido.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Dirección</label>
              <input type="text" class="form-control" id="direccion" placeholder="" required>
              <div class="invalid-feedback">
                 Dirección requerido o invalido.
              </div>
            </div>


            <div class="mb-3">
              <label for="">Télefono</label>
              <input type="text" class="form-control" id="correo" placeholder="" required>
              <div class="invalid-feedback">
                 Télefono requerido o invalido.
              </div>
            </div>


 <div class="mb-3">
              <label for="">E-mail</label>
              <input type="text" class="form-control" id="telefono" placeholder="" required>
              <div class="invalid-feedback">
                 E-mail requerido o invalido.
              </div>
            </div>

             <div class="mb-3">
              <label for="">Usuario</label>
              <input type="text" class="form-control" id="usuario" placeholder="" required>
              <div class="invalid-feedback">
                 Usuario requerido o invalido.
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="">Contraseña</label>
              <input type="password" class="form-control" id="clave" placeholder="" required>
              <div class="invalid-feedback" name="errorContasena">
                 Contraseña requerido.
              </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="">Confirmar Contraseña</label>
              <input type="password" class="form-control" id="confirclave" placeholder="" required>
              <div class="invalid-feedback" name="errorContasena">
                 Confirme su Contraseña.
              </div>
              </div>
            </div>

           
            <hr class="mb-4">
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit" id="btnregistrar">Registrar
            </button>

            <div id="resultado"></div>
          </form>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript"  data-autoinit="true" src="js/mask.js"></script>
    <script type="text/javascript" src="js/code.js"></script> 
    <script type="text/javascript" src="js/confirmarclave.js"></script> 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>

    <footer>
    <div>
      <a href="https://www.facebook.com/Keynasoft">
      <img src="../img/facebook.png"></a>
      <a href="https://www.instagram.com/Keynasoft">
      <img src="../img/instagram.png"></a>
      
      <p>Keynasoft, Copyright© 2018</p>
    </div>
  </footer>
  </body>

</html>