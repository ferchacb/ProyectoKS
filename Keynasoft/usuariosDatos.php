<?php 
include "Entidades/usuarios.php";
include "conexion.php";

class usuariosDatos
{
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


        pg_select($con,"seyna");

    $sql ="iNSERT INTO perfil(nombre,apellido,cedula,direccion,telefono,correo,usuario,clave)VALUES ('".$usuarios->nombre."','". $usuarios->apellido."','".$usuarios->cc."','".$usuarios->direccion."','".$usuarios->telefono."','".$usuarios->correo."','".$usuarios->usuario."','".$usuarios->clave."')";

            
     if (pg_query($con,$sql)){
         	return true;
			} else{

				return false;
			}
          pg_close($con);
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
}

   #$obj=new usuariosDatos();
 #if ($obj->InsertarUsuarios("maria","rojas",'24604',"barrio lopez",'123654',"luz@","lob","147"))
  #{

  #	echo "Todo bie";
	# code...
 #}




 ?>