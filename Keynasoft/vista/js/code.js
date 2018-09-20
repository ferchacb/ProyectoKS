//Aqui mando el mensaje

//funciona
$(document).ready(ini);

function ini() {

  //click va donde los metodos 
  $("#btnregistrar").click(enviarDatos);
  $("#singin").click(validar);
  $("#btnCambCont").click(cambioContra);
}

//Funcion que envia a insertar los datos
function enviarDatos() {

  var nombre = $("#nombre").val();
  var apellido = $("#apellido").val();
  var cc = $("#cc").val();
  var direccion = $("#direccion").val();
  var telefono = $("#telefono").val();
  var correo = $("#correo").val();
  var usuario = $("#usuario").val();
  var clave = $("#clave").val();
  
  $.ajax({
    url: "../vista/insertar.php",
    success: function (result) {
      if (result.trim() == "true") {
        
        ("#resultado").html("se ha registrado el usuario correctamente");
        //para que cargue el formulario login(index.php)
        document.location.href = "index.php";
        
        
      } else {
        //$("#resultado").html("No se ha podido registrado el usuario correctamente");
        resultado.innerHTML = "No se ha podido registrado el usuario correctamente";
      }
    },
    data: {
      nombre: nombre,
      apellido: apellido,
      cc: cc,
      direccion: direccion,
      telefono: telefono,
      correo: correo,
      usuario: usuario,
      clave: clave

    },
    type: "POST"
  });
}

//funcion que envia a  valida el logiin
function validar() {

  var usuario = $("#usuario").val();
  var clave = $("#clave").val();
  $.ajax({
    url: "../vista/validar.php",



    success: function (result) {

      if (result.trim() == "true") {

        document.location.href = "insertarBienes.php";

      } else {
        console.log(result);
        $("#resultado").html('<div class="alert alert-danger" role="alert"> No se ha podido ingresar<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

      }
    },
    data: {
      usuario: usuario,
      clave: clave
    },
    type: "POST"
  });
}
/**
 * Metodo que llama al cambio de contraseña
 */
function cambioContra() {
  var data = {
    'correo': $('#correo').val(),
    'pass1': $('#pass1').val(),
    'pass2': $('#pass2').val()
  };
  $.ajax({
    type: 'post',
    url: '../vista/validarCambContra.php',
    data: data,
    success: function (data) {
      $('#resultado').html(data).fadeIn();
    }
  });
}