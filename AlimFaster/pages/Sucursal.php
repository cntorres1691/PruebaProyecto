<?php

class Sucursal
{

    private $codigo_sucursal;
    private $nombre;
	private $direccion;
	private $ciudad;
    private $capacidad_maxima;
	private $codigo_producto;
    private $latitud;
	private $longitud;
    
	
     function __construct($codigo_sucursal, $nombre, $direccion,$ciudad, $capacidad_maxima, $codigo_producto, $latitud, $longitud) {
       $this->codigo_sucursal = $codigo_sucursal;
	   $this->nombre = $nombre;
	   $this->direccion = $direccion;
	   $this->ciudad = $ciudad;
	   $this->capacidad_maxima = $capacidad_maxima;
	   $this->codigo_producto = $codigo_producto;
	   $this->latitud = $latitud;
	   $this->longitud = $longitud;
	  
     }
	 
	 public function getCodigo_sucursal(){
		return $this->codigo_sucursal;
	}

	public function setCodigo_sucursal($codigo_sucursal){
		$this->codigo_sucursal = $codigo_sucursal;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function getDireccion(){
		return $this->direccion;
	}

	public function setDireccion($direccion){
		$this->direccion = $direccion;
	}

	public function getCiudad(){
		return $this->ciudad;
	}

	public function setCiudad($ciudad){
		$this->ciudad = $ciudad;
	}

	public function getCapacidad_maxima(){
		return $this->capacidad_maxima;
	}

	public function setCapacidad_maxima($capacidad_maxima){
		$this->capacidad_maxima = $capacidad_maxima;
	}

	public function getCodigo_producto(){
		return $this->codigo_producto;
	}

	public function setCodigo_producto($codigo_producto){
		$this->codigo_producto = $codigo_producto;
	}

	public function getLatitud(){
		return $this->latitud;
	}

	public function setLatitud($latitud){
		$this->latitud = $latitud;
	}

	public function getLongitud(){
		return $this->longitud;
	}

	public function setLongitud($longitud){
		$this->longitud = $longitud;
	}

}

?>
