<?php
session_start();
if(isset($_SESSION["usuario"]) && isset($_SESSION["clave"])){
      
       //echo "<a href='cerrarsesion.php'>cerrar session</a>";
         
         echo "<a href='insertarBienes.html'>Bienes</a>";

}else{
    echo "<meta http-equiv='refresh' content='0;url=index.php'>";
}
?>