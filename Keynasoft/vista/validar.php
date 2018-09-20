<?php 


//para validar el login
include "../controlador/usuarioControlador.php";

if ( isset($_POST["usuario"]) || isset($_POST["clave"])) {
      
      if (trim($_POST["usuario"])=="" ||trim($_POST["clave"])=="") {
      	# code...
      echo "false";

      	#return false;
      }else{

    $usuariosCon=new usuarioControlador();
	if ($usuariosCon-> validar($_POST["usuario"],$_POST["clave"])) {
	# code...
		session_start();
		 $_SESSION["usuario"] = $_POST["usuario"];
         $_SESSION["clave"] = $_POST["clave"];

	echo "true";
	#return true;
}else{
		echo "false";
	 #	return false;
		}
 }
	
}else{
	 	echo "false";
	 #	return false;
}	

 ?>