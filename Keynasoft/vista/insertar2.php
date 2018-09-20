<?php 
include "../controlador/bienesControlador.php";

if (isset($_POST["nombreArticulo"]) || isset($_POST["Fecha"]) || isset($_POST["lugarCompra"]) || isset($_POST["marca"])) {
      if (trim($_POST["nombreArticulo"])=="" || trim($_POST["Fecha"])=="" || trim($_POST["lugarCompra"])=="" ||trim($_POST["marca"])=="") {

      	echo "false";

      	echo $_POST["Fecha"];
      	echo $_POST["lugarCompra"];
      	echo $_POST["marca"];
      	# code...
      }else{

    $bienesCon=new bienesControlador();
        
	if ($bienesCon-> InsertarBienes($_POST["nombreArticulo"],$_POST["Descripcion"],$_POST["Fecha"],$_POST["lugarCompra"],$_POST["Factura"],$_POST["marca"],$_POST["numSerie"],$_POST["modelo"],$_POST["otro"])) {
	# code...

		echo "entro";
	echo "true";
	return true;
}else{

	echo "false";
	echo "cpmo";
	return false;
	 
		}
 }	
}else{
echo "hola";
	 	echo "false";
	 	return false;
}




  ?>


