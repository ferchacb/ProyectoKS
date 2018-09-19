<?php 

#Segunda que hice
include "conexion.php";

function crearBd(){

$cnn = new Conexion();
$con = $cnn-> conectar();


$sql ="create DATABASE seyna";

#pg_query($con,$postres);

if (pg_query($con,$sql)) {
	# code...
	echo "consulta correcta";
}
pg_close($con);

}

function crearTablasPerfil(){

$cnn = new Conexion();
$con = $cnn-> conectar();
$sql ="create table perfil(
  idusuario serial NOT NULL,
  nombre varchar(100),
  apellido varchar(100),
  cedula integer,
  direccion varchar(100),
  telefono integer,
  correo varchar(100),
  usuario varchar(100),
  clave varchar(100),
  CONSTRAINT perfil_pkey PRIMARY KEY (idusuario))";

#pg_query($con,$postres);

if (pg_query($con,$sql)) {
  # code...
  echo "Tabla creada";
}
pg_close($con);

}

function crearTablasBienes(){

$cnn = new Conexion();
$con = $cnn-> conectar();
$sql ="create table Bienes(
   idbienes serial NOT NULL,
  nombrearticulo character varying(100),
  descripcion character varying(100),
  fecha timestamp without time zone,
  lugarcompra character varying(100),
  facturaimagen bytea,
  marca character varying(100),
  numserie character varying(100),
  modelo character(100),
  otros character(20),
  CONSTRAINT Bienes_pkey PRIMARY KEY (idBienes))";

#pg_query($con,$postres);

if (pg_query($con,$sql)) {
  # code...
  echo "Tabla creada";
}
pg_close($con);

}


#crearBd();
#crearTablasPerfil();
crearTablasBienes();



 ?>