<?php
class Tipo_producto
{
	private $codigo_tipo;
	private $nombre;
	private $hora_inicio;
	private $hora_fin;
	private $codigo_producto;
	
	function __construct($codigo_tipo,$nombre,$hora_inicio,$hora_fin,$codigo_producto){
		$this->codigo_tipo = $codigo_tipo;
		$this->nombre = $nombre;
		$this->hora_inicio = $hora_inicio;
		$this->hora_fin = $hora_fin;
		$this->codigo_producto = $codigo_producto;
	}
	
	function setCodigo_tipo($codigo_tipo){
		$this->codigo_tipo = $codigo_tipo;
	}
	function getCodigo_tipo(){
		return $this->codigo_tipo;
	}
	function setNombre($nombre){
		$this->nombre = $nombre;
	}
	function getNombre(){
		return $this->nombre;
	}
	function setHora_inicio($hora_inicio){
		$this->hora_inicio = $hora_inicio;
	}
	function getHora_inicio(){
		return $this->hora_inicio;
	}
	function setHora_fin($hora_fin){
		$this->hora_fin = $hora_fin;
	}
	function getHora_fin(){
		return $this->hora_fin;
	}
	function setCodigo_producto($codigo_producto){
		this->codigo_producto = $codigo_producto;
	}
	function getCodigo_producto(){
		return $this->codigo_producto;
	}
	
}
?>

  