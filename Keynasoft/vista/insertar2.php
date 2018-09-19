<?php 
include "/../controlador/bienesControlador.php";

if (isset($_POST["nombreArticulo"]) ||isset($_POST["fecha"]) || isset($_POST["direccion"]) || isset($_POST["marca"])) {
      if (trim($_POST["nombreArticulo"])==""  || trim($_POST["fecha"])=="" || trim($_POST["direccion"])=="" ||trim($_POST["marca"])=="") {
      	# code...
      	echo "false";

      	return false;
      }else{

    $bienesCon=new bienesControlador();
          direccion:direccion,
	if ($bienesCon-> InsertarBienes($_POST["nombreArticulo"],$_POST["descripcion"],$_POST["fecha"],$_POST["direccion"],$_POST["factura"],$_POST["marca"],$_POST["numSerie"],$_POST["modelo"],$_POST["otro"])) {
	# code...
	echo "true";
	return true;
}else{

	echo "false";
	return false;
	 
		}
 }	
}else{

	 	echo "false";
	 	return false;
}




  ?>


