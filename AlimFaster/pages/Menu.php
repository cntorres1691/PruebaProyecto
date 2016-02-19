<?php

class Menu
{
    private $codigo_menu;
    private $descripcion;
	private $costo;
    
     function __construct($codigo_menu, $descripcion,$costo) {
        $this->codigo_menu = $codigo_menu;
        $this->descripcion = $descripcion;
	    $this->costo = $costo;
     }
    
     function setCodigo_menu($codigo_menu){
       $this->codigo_menu = $codigo_menu;
     } 
     function getCodigo_menu(){
       return $this->codigo_menu;
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
	 
}
?>
