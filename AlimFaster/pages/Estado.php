<?php 
class Estado
{
	private $codigo_estado;
	private $descripcion;
	private $codigo_restaurante;
	private $codigo_cliente;
	private $codigo_usuario;
	private $codigo_producto;
	private $codigo_tarjeta;
	private $numero_mesa;

	function __construct($codigo_estado,$descripcion,$codigo_restaurante,$codigo_cliente,$codigo_usuario,$codigo_producto,$codigo_tarjeta,$numero_mesa)
	{
			$this->codigo_estado = $codigo_estado;
			$this->descripcion = $descripcion;
			$this->codigo_restaurante = $codigo_restaurante;
			$this->codigo_cliente = $codigo_cliente;
			$this->codigo_usuario = $codigo_usuario;
			$this->codigo_producto = $codigo_producto;
			$this->codigo_tarjeta = $codigo_tarjeta;
			$this->numero_mesa = $numero_mesa;
	}
	
	function setCodigo_estado($codigo_estado){
		$this->codigo_estado = $codigo_estado;
	}
	function getCodigo_estado(){
		return $this->codigo_estado;
	}
	function setDescripcion($descripcion){
		$this->descripcion = $descripcion;
	}
	function getDescripcion(){
		return $this->descripcion;
	}
	function setCodigo_restaurante($codigo_restaurante){
		$this->codigo_restaurante = $codigo_restaurante;
	}
	function getCodigo_restaurante(){
		return $this->codigo_restaurante;
	}
	function setCodigo_cliente($codigo_cliente){
		$this->codigo_cliente = $codigo_cliente;
	}
	function getCodigo_cliente(){
		return $this->codigo_cliente;
	}
	function setCodigo_usuario($codigo_usuario){
		$this->codigo_usuario= $codigo_usuario;
	}
	function getCodigo_usuario(){
		return $this->codigo_usuario;
	}
	function setCodigo_producto($codigo_producto){
		$this->codigo_producto= $codigo_producto;
	}
	function getCodigo_producto(){
		return $this->codigo_producto];
	}
	function setCodigo_tarjeta($codigo_tarjeta){
		$this->codigo_tarjeta= $codigo_tarjeta;
	}
	function getCodigo_tarjeta(){
		return $this->codigo_tarjeta;
	}
	function setNumero_mesa($numero_mesa){
		$this->numero_mesa= $numero_mesa;
	}
	function getNumero_mesa(){
		return $this->numero_mesa;
	}
	
}
?>
