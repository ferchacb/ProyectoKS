<?php 
//Aqui valido si van vacio no puede guardar

include "../controlador/usuarioControlador.php";

     
     //Se validda su va con datos
	if (isset($_POST["nombre"])|| isset($_POST["apellido"]) ||isset($_POST["cc"]) || isset($_POST["direccion"]) | isset($_POST["telefono"]) || isset($_POST["correo"]) || isset($_POST["usuario"])  || isset($_POST["clave"])) {
      	//Se valida que no este vacio
    	if (trim($_POST["nombre"])=="" || trim($_POST["apellido"])=="" || trim($_POST["cc"])=="" || trim($_POST["direccion"])=="" || trim($_POST["telefono"])=="" || trim($_POST["correo"])=="" || trim($_POST["usuario"])=="" ||trim($_POST["clave"])=="") {
      		echo "false";
    	}else{
 			//Se manada los datos a insertar
    		$usuariosCon=new usuarioControlador();
			if ($usuariosCon-> insertarUsuarios($_POST["nombre"],$_POST["apellido"],$_POST["cc"],$_POST["direccion"],$_POST["telefono"],$_POST["correo"],$_POST["usuario"],$_POST["clave"])) {
				echo "true";	
			}else{
				echo "false";
			}
 		}
	}else{
		echo "false";	 	
	}
?>


