<?php
class Tarjeta_credito
{
	private $numero_tarjeta;
	private $tipo;
	private $fecha_expiracion;
	private $entidad_bancaria;
	
	function __construct($numero_tarjeta,$tipo,$fecha_expiracion,$entidad_bancaria)
	{
		$this->numero_tarjeta = $numero_tarjeta;
		$this->tipo = $tipo;
		$this->fecha_expiracion = $fecha_expiracion;
		$this->entidad_bancaria = $entidad_bancaria;
	}
	
	function setNumero_tarjeta($numero_tarjeta){
		$this-numero_tarjeta = $numero_tarjeta;
	}
	function getNumero_tarjeta($numero_tarjeta){
		return $this->numero_tarjeta;
	}
	function setTipo($tipo){
		$this->tipo = $tipo;
	}
	function  getTipo(){
		retunr $this->tipo;
	}
	function setFecha_expiracion($fecha_expiracion){
		$this->fecha_expiracion = $fecha_expiracion;
	}
	function fecha_expiracion()[
		return $this->fecha_expiracion;
	]
	function setEntidad_bancaria($entidad_bancaria){
		$this->entidad_bancaria = $entidad_bancaria;
	}
	function getEntidad_bancaria($entidad_bancaria){
		return $this->entidad_bancaria;
	}
}
?>
