<?php 
//controla todos los datos que pasan

//aqui es donde llamo los funcoines de insertar, validar
include "../bienesDatos.php";

//retorno para que vaya a la parte final
class bienesControlador{
	
	function InsertarBienes($nombreArticulo,$Descripcion,$Fecha,$lugarCompra,$Factura,$marca,$numSerie,$modelo,$otro)
	{
		# code...
	$obj=new bienesDatos();
	   return $obj-> InsertarBienes($nombreArticulo,$Descripcion,$Fecha,$lugarCompra,$Factura,$marca,$numSerie,$modelo,$otro);

	}
}

  ?>