<?php

class Detalle_factura
{
    private $secuencia;
    private $codigo_producto;
	private $cantidad;
	private $precio_unitario;
	private $precio_total;
	private $servicio;
	private $numero_factura;
	
     function __construct($secuencia, $codigo_producto,$cantidad,$precio_unitario,$precio_total,$servicio,$numero_factura) {
        $this->secuencia = $secuencia;
        $this->codigo_producto = $codigo_producto;
	    $this->cantidad = $cantidad;
		$this->precio_unitario = $precio_unitario;
		$this->precio_total = $precio_total;
		$this->servicio = $servicio;
		$this->numero_factura = $numero_factura;
     }
	
     function setSecuencia($secuencia){
       $this->secuencia = $secuencia;
     } 
     function getSecuencia(){
       return $this->secuencia;
     } 
     function setCodigo_producto($codigo_producto){
       $this->codigo_producto = $codigo_producto;
     } 
     function getCodigo_producto(){
       return $this->codigo_producto;
     } 
	 function setCantidad($cantidad){
       $this->cantidad = $cantidad;
     } 
     function getCantidad(){
       return $this->cantidad;
	 } 
	 function setPrecio_unitario($precio_unitario){
       $this->precio_unitario = $precio_unitario;
     } 
     function getPrecio_unitario(){
       return $this->precio_unitario;
	 } 
	 function setPrecio_total($precio_total){
       $this->precio_total = $precio_total;
     } 
     function getPrecio_total(){
       return $this->precio_total;
	 } 
	 function setServicio($servicio){
       $this->servicio = $servicio;
     } 
     function getServicio(){
       return $this->servicio;
	 } 
	 function setNumero_factura($numero_factura){
       $this->numero_factura = $numero_factura;
     } 
     function getNumero_factura(){
       return $this->numero_factura;
	 } 
}

?>
