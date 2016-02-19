<?php

class Producto
{
    private $codigo_producto;
    private $descripcion;
	private $costo;
	private $pvp;
	private $utilidad;
	private $idmenu;
    
     function __construct($codigo_producto, $descripcion,$costo,$pvp,$utilidad,$idmenu) {
        $this->codigo_producto = $codigo_producto;
        $this->descripcion = $descripcion;
	    $this->costo = $costo;
		$this->pvp = $pvp;
		$this->utilidad = $utilidad;
		$this->idmenu = $idmenu;
     }
    
     function setCodigo_producto($codigo_producto){
       $this->codigo_producto = $codigo_producto;
     } 
     function getCodigo_producto(){
       return $this->codigo_producto;
     } 
     function setDescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 
     function getDescripcion(){
       return $this->descripcion;
     } 
	 function setCosto($costo){
       $this->costo = $costo;
     } 
     function getCosto(){
       return $this->costo;
	 } 
	 function setPvp($pvp){
       $this->pvp = $pvp;
     } 
     function getPvp(){
       return $this->pvp;
	 } 
	 function setUtilidad($utilidad){
       $this->utilidad = $utilidad;
     } 
     function getUtilidad(){
       return $this->utilidad;
	 } 
	 
	 function setIdmenu($idmenu){
       $this->idmenu = $idmenu;
     } 
     function getIdmenu(){
       return $this->idmenu;
     } 
	 
}
?>
