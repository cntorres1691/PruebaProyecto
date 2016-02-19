<?php
class Mesa
{
	private $numero_mesa
	private $descripcion
	private $capacidad_ocupantes
	
	function __construct($numero_mesa,$descripcion,$capacidad_ocupantes){
		$this->numero_mesa = $numero_mesa;
		$this->descripcion = $descripcion;
		$this->capacidad_ocupantes = $capacidad_ocupantes;
	}
	
	function setNumero_mesa($numero_mesa){
		$this->numero_mesa = $numero_mesa;
	}
	function getNumero_mesa(){
		return $this->numero_mesa;
	}
	function setDescripcion($descripcion){
		$this->descripcion = $descripcion;
	}
	function getGescripcion(){
		return $this->descripcion;
	}
	function setCapacidad_ocupantes($capacidad_ocupantes){
		$this->capacidad_ocupantes = $capacidad_ocupantes;
	}
	function getCapacidad_ocupantes(){
		return $this->capacidad_ocupantes;
	}
}
?>

