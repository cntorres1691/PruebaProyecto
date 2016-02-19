<?php

class Vista
{
	private $codigo_persona;
	private $cedula_identidad;
	private $nombre;
	private $apellido;
	private $usuario;
	private $contrasena
	private $estado_civil;
	private $genero;
	private $direccion_domicilio;
	private $telefono;
	
	function __construct($codigo_persona, $cedula_identidad, $nombre, $apellido, $usuario, $contrasena, $estado_civil, $genero,$direccion_domicilio,$telefono) 
	{
        $this->codigo_persona = $codigo_persona;
        $this->cedula_identidad = $cedula_identidad;
	   	$this->nombre = $nombre;
		$this->apellido = $apellido;
		$this->usuario = $usuario;
		$this->contrasena = $contrasena
		$this->estado_civil = $estado_civil;
		$this->genero = $genero;
		$this->direccion_domicilio = $direccion_domicilio;
		$this->telefono = $telefono;
	}
    
	function setCodigo_persona($codigo_persona)
	{
		$this->codigo_persona = $codigo_persona;
	}
	
	function getCodigo_persona()
	{
		return $this->codigo_persona;
	} 

	function setCedula_identidad($cedula_identidad)
	{
		$this->cedula_identidad = $cedula_identidad;
	}

	function getCedula_identidad()
	{
		return $this->cedula_identidad;
	}

	function setNombre($nombre)
	{
		$this->nombre = $nombre;
	}

	function getNombre()
	{
		return $this->nombre;
	}

	function setApellido($apellido)
	{
		$this->apellido = $apellido;
	}

	function getApellido()
	{
		return $this->apellido;
	}

	function setUsuario($usuario)
	{
		$this->usuario = $usuario;
	}

	function getUsuario()
	{
		return $this->usuario;
	}

	public function setContrasena($contrasena)
	{
		$this->contrasena = $contrasena;
	}
	
	public function getContrasena()
	{
		return $this->contrasena;
	}

	function setEstado_civil($estado_civil)
	{
		$this->estado_civil = $estado_civil;
	}

	function getEstado_civil()
	{
		return $this->estado_civil;
	}

	function setGenero($genero)
	{
		$this->genero = $genero;
	}

	function getGenero()
	{
		return $this->genero;
	}

	function setDireccion_domicilio($direccion_domicilio;)
	{
		$this->direccion_domicilio = $direccion_domicilio;
	}

	function getDireccion_domicilio()
	{
		return $this->direccion_domicilio;
	}

	function setTelefono($telefono)
	{
		$this->telefono = $telefono;
	}

	function getTelefono()
	{
		return $this->telefono;
	}
}

?>
