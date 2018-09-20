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
        ##pg_select($con,"seyna");
  

#    $bienes->Factura = $_FILES['file']['name'];
 #  $target_dir = "upload/";
  # $target_file = $target_dir . basename($_FILES["file"]["name"]);

   // Select file type
   #$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

   // Valid file extensions
   #$extensions_arr = array("jpg","jpeg","png","gif");

   // Check extension
   #if( in_array($imageFileType,$extensions_arr) ){

    // Convert to base64 
    #$image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']) );
    #$image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
#bienes->Factura = file_get_contents("/path/to/image.jpg");
             // alternatively specify an URL, if PHP settings allow
#$base64 = base64_encode($bienes->Factura);


        $sql="iNSERT INTO bienes(nombrearticulo, descripcion, fecha, lugarcompra, facturaimagen, 
            marca, numserie, modelo,otros)
    VALUES ('".$bienes->nombreArticulo."','".$bienes->Descripcion."', '".$bienes->Fecha."','".$bienes->lugarCompra."','".$base64."', '".$bienes->marca."','".$bienes->numSerie."','".$bienes->modelo."','".$bienes->otro."')";

      if (pg_query($con,$sql)){
         	return true;
			} else{

				return false;
			}
          pg_close($con);
	}
}
#$obj=new bienesDatos();

 #if ($obj->InsertarBienes("Celular","negro","2018/08/17","SanRoque","759111.png","N98","14565484984","2015","")) {
    #code...
 # echo "todo bien";
 #}


 ?>