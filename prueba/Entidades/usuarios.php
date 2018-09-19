<?php
#Tercera que hice
class usuarios
{
	public $IdPerfil;
	function POST_IdPerfil($IdPerfil){
		return $this->$IdPerfil;
	}


    public $nombre;
	function POST_nombre($nombre){
		return $this->$nombre;
	}

	public $apellido;
	function POST_apellido($apellido){
		return $this->$apellido;
	}

	public $cc;
	function POST_cc($cc){
		return $this->$cc;
	}

     
   public $direccion;
	function POST_direccion($direccion){
		return $this->$direccion;
	}

public $telefono;
	function POST_telefono($telefono){
		return $this->$telefono;
	}
     

public $correo;
	function POST_correo($correo){
		return $this->$correo;
	}
     
     public $usuario;
	function POST_usuario($usuario){
		return $this->$usuario;
	}
     
 public $clave;
	function POST_clave($clave){
		return $this->$clave;
	}
     
	
}


?>