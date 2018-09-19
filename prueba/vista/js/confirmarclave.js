var contrasena = document.getElementById("clave");
var confirm_contrase = document.getElementById("confirclave");
var contasenaError = document.getElementsByName("errorContasena");

function validatePassword(){
  if(contrasena.value != confirm_contrase.value) {
    confirm_contrase.setCustomValidity("Contraseña no Coincide");
    contrasena.setCustomValidity("Contraseña no Coincide");
    contasenaError[0].innerHTML = "Contraseña y Confirmar Contraseña no coinciden";
    contasenaError[1].innerHTML = "Contraseña y Confirmar Contraseña no coinciden";
  } else {
    confirm_contrase.setCustomValidity('');
    contrasena.setCustomValidity('');
  }



}

contrasena.onchange = validatePassword;
confirm_contrase.onkeyup = validatePassword;