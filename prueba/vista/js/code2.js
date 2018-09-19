//Aqui mando el mensaje

//funciona
$(document).ready(ini);

function ini(){

	//alert("iniciado");

	$("#btnInsertar").click(enviarDatos);



}
function enviarDatos(){
       
   var nombreArticulo = $("#nombreArticulo").val();
   var descripcion=  $("#descripcion").val();
   var fecha=  $("#Fecha").val();
   var direccion=  $("#direccion").val();
   var factura=  $("#imagen").val();
   var marca=  $("#marca").val();
   var numSerie=  $("#numSerie").val();
   var modelo =$("#modelo").val();
    var otro =$("#otro").val();


var validar=false;
   $.ajax({url:"../vista/insertar2.php",
     success:function(validar){
 
alert(validar);
       if (validar=="true") {

//$("#resultado").html("se ha registrado el usuario correctamente");
resultado.innerHTML="se ha guardado correctamente";

       }else{
//$("#resultado").html("No se ha podido registrado el usuario correctamente");
resultado.innerHTML="No se ha podido guardar";


       }
     },
     data:{
          nombreArticulo:nombreArticulo,
          descripcion:descripcion,
          fecha:fecha,
          direccion:direccion,
          factura:factura,
          marca:marca,
          numSerie:numSerie,
		      modelo:modelo,
          otro:otro
     }, 
     type:"POST"





});

}