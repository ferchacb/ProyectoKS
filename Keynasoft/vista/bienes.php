<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Css/bienes.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>
<title>Insertar Bienes</title>
</head>

<body>
    <header>
        <h2>Ingresar Bienes</h2>
    </header>
    <form>

        <div class="form-group">
            <label for="">Nombre Producto</label>
            <input type="text" class="form-control" id="nombreArticulo" placeholder="Nombre Producto">

        </div>
        <div class="form-group">
            <label for="">Descripción</label>
            <input type="text" class="form-control" id="descripcion" placeholder="Descripción">
        </div>
        <div class="container">
            <div class="btn-group">
                <button type="button" class="btn btn-primary">Marcas</button>
                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
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
    </form>



    <div class="container">
        <div class="row">
            <h2>Multi level dropdown menu in Bootstrap</h2>
            <hr>
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Marcas
                </button>
                <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                    <li class="dropdown-submenu">
                        <a class="dropdown-item" tabindex="-1" href="#">Computadoras</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item"><a tabindex="-1" href="#">Alienware</a></li>
                            <li class="dropdown-item"><a tabindex="-1" href="#">Asus</a></li>
                            <li class="dropdown-item"><a tabindex="-1" href="#">Dell</a></li>
                            <li class="dropdown-item"><a tabindex="-1" href="#">Lenovo</a></li>
                            <li class="dropdown-item"><a tabindex="-1" href="#">HP</a></li>
                            <li class="dropdown-item"><a tabindex="-1" href="#">MAC</a></li>
                            <li class="dropdown-item"><a tabindex="-1" href="#">Toshiba</a></li>
                        </ul>
                    </li>
                    <li class="dropdown-submenu">
                        <a class="dropdown-item" tabindex="-1" href="#">Dispositivos Móviles</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item"><a tabindex="-1" href="#">Apple</a></li>
                            <li class="dropdown-item"><a tabindex="-1" href="#">Samsung</a></li>
                            <li class="dropdown-item"><a tabindex="-1" href="#">Huawei</a></li>
                            <li class="dropdown-item"><a tabindex="-1" href="#">Sony</a></li>
                            <li class="dropdown-item"><a tabindex="-1" href="#">ZTE</a></li>
                            <li class="dropdown-item"><a tabindex="-1" href="#">Asus</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <footer>
        <div>
          <a href="https://www.facebook.com/Keynasoft">
          <img src="img/facebook.png"></a>
          <a href="https://www.instagram.com/Keynasoft">
          <img src="img/instagram.png"></a>
          
          <p>Keynasoft, Copyright© 2018</p>
        </div>
      </footer>

</body>

</html>