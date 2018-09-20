//Aqui mando el mensaje

//funciona
$(document).ready(ini);

function ini(){

	//alert("iniciado");

	$("#btnInsertar").click(enviarDatos);

}
function enviarDatos(){
       
   var nombreArticulo = $("#nombreArticulo").val();
   var descripcion=  $("#Descripcion").val();
   var Fecha=  $("#Fecha").val();
   var lugarCompra=  $("#lugarCompra").val();
   var Factura=  $("#Factura").val();
   var marca=  $("#marca").val();
   var numSerie=  $("#numSerie").val();
   var modelo =$("#modelo").val();
    var otro =$("#otro").val();


   $.ajax({url:"../vista/insertar2.php",
     success:function(result){
 
//alert(result.trim());
       if (result.trim() == "true") {

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
          Fecha:Fecha,
          lugarCompra:lugarCompra,
          Factura:Factura,
          marca:marca,
          numSerie:numSerie,
		      modelo:modelo,
          otro:otro
     }, 
     type:"POST"





});

}