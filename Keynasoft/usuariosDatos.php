<?php 
include "Entidades/usuarios.php";
include "conexion.php";

class usuariosDatos
{
	public $msj = 'Ocurrio un problema que no puede ser controlado.';
	function InsertarUsuarios($nombre,$apellido,$cc,$direccion,$telefono,$correo,$usuario,$clave){
       $cnn = new Conexion();
       $con = $cnn-> conectar();

       $usuarios= new usuarios();
       $usuarios->nombre=$nombre;
       $usuarios->apellido=$apellido;
       $usuarios->cc=$cc;
	   $usuarios->direccion=$direccion;
	   $usuarios->telefono=$telefono;
	   $usuarios->correo=$correo;
	   $usuarios->usuario=$usuario;
	   $usuarios->clave=$clave;


   if (!$this->validarBaseDatos($cc,$usuario,$correo)) {
	# code...
   $sql ="iNSERT INTO perfil(nombre,apellido,cedula,direccion,telefono,correo,usuario,clave)VALUES ('".$usuarios->nombre."','". $usuarios->apellido."','".$usuarios->cc."','".$usuarios->direccion."','".$usuarios->telefono."','".$usuarios->correo."','".$usuarios->usuario."','".$usuarios->clave."')";

            
     if (pg_query($con,$sql)){
         	return true;
			} else{

				return false;
			}
          pg_close($con);
	}
}

//valido si existen en la base de datos
function validar($usuario,$clave){
   $cnn = new Conexion();
       $con = $cnn-> conectar();

       $usuarios= new usuarios();
	   $usuarios->usuario=$usuario;
	   $usuarios->clave=$clave;       


 $sql ="sELECT usuario,clave FROM perfil where (usuario='".$usuarios->usuario."') and (clave='".$usuarios->clave."')";

$consulta=pg_query($con,$sql);
$fila=pg_fetch_array($consulta);

if ($fila>0) {
#se valida que si se encuentra en la base de datos
	if ($fila["usuario"]==$usuarios->usuario && $fila["clave"]==$usuarios->clave) {
		return true;
	}
}
else{
	return false;
}

}


function validarBaseDatos($cc,$usuario,$correo){
   $cnn = new Conexion();
       $con = $cnn-> conectar();
       $usuarios= new usuarios();
       $usuarios->cc=$cc;
	   $usuarios->usuario=$usuario;
	   $usuarios->correo=$correo;

      
 $sql ="sELECT cedula,usuario,correo FROM perfil where (cedula='".$usuarios->cc."') or (usuario='".$usuarios->usuario."') or (correo='".$usuarios->correo."')";

$consulta=pg_query($con,$sql);
$fila=pg_fetch_array($consulta);

if ($fila>1) {
#se valida que si se encuentra en la base de datos
	if ($fila["cedula"]==$usuarios->cc || $fila["usuario"]==$usuarios->usuario || $fila["correo"]==$usuarios->correo) {

        
       echo " los 3 esta en la base de datos";
		 


		return true;
	}
}
else{


	echo "no estan en la base de datos";
	return false;
}

}

	//Metodo que varifica si el usuario existe
	function existeUsuario($usuario){
		try{
			$cnn = new Conexion();
			$con = $cnn->conectar();
			$sql = "select correo, usuario from perfil where (correo = '".$usuario."') or (usuario = '".$usuario."')";
			$consulta = pg_query($con, $sql);
			$fila=pg_fetch_array($consulta);
			return ($fila > 1) ? true : false;
		} catch (Exception $e){
			throw new Exception ($msj);
		}
	}

	//Metodo que hace el cambio de contraseña
	function cambioContra($usuario, $pass){
		try{
			$cnn = new Conexion();
			$con = $cnn->conectar();
			$sql = "update perfil set clave = '".$pass."' where (correo = '".$usuario."') or (usuario = '".$usuario."')";
		 	return pg_query($con, $sql);
		}catch (Exception $e){
			throw new Exception ($msj);
		}
	}


}



#$obj=new usuariosDatos();
#if ($obj->InsertarUsuarios("sfbdsbd","Rdsavsdas",'345352',"savsdvd lopez",'34538',"vsavsv@","dsavsdva","31312312"))
#{
#	echo "Todo bie";
	# code...
#}



 ?>