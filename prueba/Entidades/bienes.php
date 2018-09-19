<?php

class bienes
{
	public $IdArticulo;
	function POST_IdArticulo($IdArticulo){
		return $this->$IdArticulo;
	}


    public $nombreArticulo;
	function POST_nombreArticulo($nombreArticulo){
		return $this->$nombreArticulo;
	}

	public $Descripcion;
	function POST_Descripcion($Descripcion){
		return $this->$Descripcion;
	}

public $Fecha;
	function POST_Fecha($Fecha){
		return $this->$Fecha;
	}

     
   public $lugarCompra;
	function POST_lugarCompra($lugarCompra){
		return $this->$lugarCompra;
	}

public $Factura;
	function POST_Factura($Factura){
		return $this->$Factura;
	}
     

public $marca;
	function POST_marca($marca){
		return $this->$marca;
	}
     
     public $numSerie;
	function POST_numSerie($numSerie){
		return $this->$numSerie;
	}
     
 public $modSelo;
	function POST_modelo($modelo){
		return $this->$modelo;
	}
     

     public $otro;
	function POST_otro($otro){
		return $this->$otro;
	}
	
}





?>