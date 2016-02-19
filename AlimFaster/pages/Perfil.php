<?php

class Perfil
{

    private $codigo_perfil;
    private $descripcion;
	private $registro;
	
    
	
     function __construct($codigo_perfil, $descripcion, $registro) {
       $this->codigo_perfil = $codigo_perfil;
	   $this->descripcion = $descripcion;
	   $this->registro = $registro;
	  
     }
	 
	public function getCodigo_perfil(){
		return $this->codigo_perfil;
	}

	public function setCodigo_perfil($codigo_perfil){
		$this->codigo_perfil = $codigo_perfil;
	}

	public function getDescripcion(){
		return $this->descripcion;
	}

	public function setDescripcion($descripcion){
		$this->descripcion = $descripcion;
	}

	public function getRegistro(){
		return $this->registro;
	}

	public function setRegistro($registro){
		$this->registro = $registro;
	}

}

?>
