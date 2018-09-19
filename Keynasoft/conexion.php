 <?php

class Conexion
{

	//Se conecta a la base de datos
	function conectar(){

		return $connection=pg_Connect("host='localhost' dbname='seyna' port='5432' user='postgres' password='123'");
	}
	
}

#$cnn = new Conexion();

#if ($cnn->conectar()) {

#	 echo "Conexion correcta";
	# code...
#}else{

#	echo "Conexion incorrecta";
#}

?>

 
