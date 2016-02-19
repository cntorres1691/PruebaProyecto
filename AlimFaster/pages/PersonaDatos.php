<?php 
include_once('Persona.php');
include_once('Collector.php');

class PersonaDatos extends Collector 
{
	function insertarPersona(){
		$rows = self::$db->getRows("insert into persona VALUES ('$_POST[cedula_identidad]','$_POST[nombre]','$_POST[apellido]','$_POST[estado_civil],'$_POST[genero]','$_POST[direccion_domicilio],'$_POST[telefono])";
		$arrayDemo = array();
			array_push($arrayDemo, $aux);
	return $arrayDemo;
	}
	
	function InsertarUsuario($id){
		$rows = self::$db->getRows("insert into usuario  VALUES ('$_POST[nombre_usuario]','$_POST[email]', '$_POST[contrasena]','$_POST[dop]')";
		$arrayDemo = array();
			array_push($arrayDemo, $aux);
		
	return $arrayDemo;
	}
}

?>