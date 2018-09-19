<?php 
include "Entidades/bienes.php";
include "conexion.php";

class bienesDatos
{
	function InsertarBienes($nombreArticulo,$Descripcion,$Fecha,$lugarCompra,$Factura,$marca,$numSerie,$modelo,$otro)
	{
       $cnn = new Conexion();
       $con = $cnn-> conectar();
       $bienes= new bienes();

       $bienes->nombreArticulo=$nombreArticulo;
       $bienes->Descripcion=$Descripcion;
       $bienes->Fecha=$Fecha;
  	   $bienes->lugarCompra=$lugarCompra;
  	   $bienes->Factura=$Factura;
  	   $bienes->marca=$marca;
  	   $bienes->numSerie=$numSerie;
  	   $bienes->modelo=$modelo;
       $bienes->otro=$otro;
        pg_select($con,"seyna");

        $sql="iNSERT INTO bienes(nombrearticulo, descripcion, fecha, lugarcompra, facturaimagen, 
            marca, numserie, modelo,otros)
    VALUES ('".$bienes->nombreArticulo."','".$bienes->Descripcion."', '".$bienes->Fecha."','".$bienes->lugarCompra."','".$bienes->Factura."', '".$bienes->marca."','".$bienes->numSerie."','".$bienes->modelo."','".$bienes->otro."')";

      if (pg_query($con,$sql)){
         	return true;
			} else{

				return false;
			}
          pg_close($con);
	}
}
# $obj=new bienesDatos();

 #if ($obj->InsertarBienes("ll","ff","2018/08/17","dd","ss","ss","ss","")) {
   # code...
  #echo "todo bien";
 #}


 ?>