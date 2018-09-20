<?php 
require_once './../controlador/usuarioControlador.php';
if (trim(!empty($_POST['correo'])) || trim(!empty($_POST['pass1'])) || trim(!empty($_POST['pass2']))){
    if (validarContra($_POST['pass1'], $_POST['pass2'])) {
        $usuarioCon = new usuarioControlador();
        if ($usuarioCon->existeUsuario($_POST['correo'])) {
            if ($usuarioCon->cambioContra($_POST['correo'], $_POST['pass1'])) {
                echo '<div class="alert alert-success" role="alert">Contraseña cambiada exitosamente.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
            }
        }else{
            echo '<div class="alert alert-danger" role="alert">El usuario o el correo no coincide.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';  
        }
    }else{
        echo '<div class="alert alert-danger" role="alert">Las contraseñas no inciden.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
    }
}else{
    echo '<div class="alert alert-danger" role="alert">Debe llenar todos lo campos.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
}

function validarContra($pass1, $pass2){
    return ($pass1 == $pass2) ? true : false;
}
?>