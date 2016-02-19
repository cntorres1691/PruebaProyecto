<?php 
class Entidad_bancaria
{
	private $codigo_entidad_bancaria;
	private $nombre;
	private $ruc;
	private $numero_tarjeta;
	
	function __construct($codigo_entidad_bancaria,$nombre,$ruc,$numero_tarjeta){
		$this->codigo_entidad_bancaria = $codigo_entidad_bancaria;
		$this->nombre = $nombre;
		$this->ruc = $ruc;
		$this->numero_tarjeta = $numero_tarjeta;
	}
	
	function setCodigo_entidad_bancaria($codigo_entidad_bancaria){
		$this->codigo_entidad_bancaria = $codigo_entidad_bancaria;
	}
	function getCodigo_entidad_bancaria(){
		return $this->codigo_entidad_bancaria;
	}
	function setNombre($nombre){
		$this->nombre = $nombre;
	}
	function getNombre(){
		return $this->nombre;
	}
	function setRuc($ruc){
		$this->ruc = $ruc;
	}
	function getRuc(){
		return $this->ruc;
	}
	function setNumero_tarjeta($numero_tarjeta){
		$this->numero_tarjeta = $numero_tarjeta;
	}
	function getNumero_tarjeta(){
		return $this->numero_tarjeta;
	}
	
}
?>

