<?php 

//aqui es donde llamo los funcoines de insertar, validar
include "../usuariosDatos.php";



class usuarioControlador
{
	
	function InsertarUsuarios($nombre,$apellido,$cc,$direccion,$telefono,$correo,$usuario,$clave)
	{
		# code...
	$obj=new usuariosDatos();
	   return $obj-> InsertarUsuarios($nombre,$apellido,$cc,$direccion,$telefono,$correo,$usuario,$clave);

	}
	function validar($usuario,$clave){

       $obj=new usuariosDatos();
	   return $obj-> validar($usuario,$clave);

	}
}

 ?>