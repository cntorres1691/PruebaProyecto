<?php

class Usuario
{

    private $codigo_usuario;
    private $nombre;
    private $usuario;
	
    
	
     function __construct($codigo_usuario, $nombre, $usuario) {
       $this->codigo_usuario = $codigo_usuario;
	   $this->nombre = $nombre;
	   $this->usuario = $usuario;
	  
     }
	 
	 public function getCodigo_usuario(){
		return $this->codigo_usuario;
	}

	public function setCodigo_usuario($codigo_usuario){
		$this->codigo_usuario = $codigo_usuario;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function getUsuario(){
		return $this->usuario;
	}

	public function setUsuario($usuario){
		$this->usuario = $usuario;
	}
}

?>
