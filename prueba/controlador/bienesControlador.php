<?php 
//controla todos los datos que pasan

//aqui es donde llamo los funcoines de insertar, validar
include "../bienesDatos.php";



class bienesControlador{
	
	function InsertarBienes($nombreArticulo,$Descripcion,$Fecha,$lugarCompra,$Facturao,$marca,$numSerie,$modelo,$otro)
	{
		# code...
	$obj=new bienesDatos();
	   return $obj-> InsertarBienes($nombreArticulo,$Descripcion,$Fecha,$lugarCompra,$Facturao,$marca,$numSerie,$modelo,$otro);

	}
}

  ?>