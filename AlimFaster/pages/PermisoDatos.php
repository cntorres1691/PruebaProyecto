<?php 
include_once('Permiso.php');
include_once('Collector.php');

class PermisoDatos extends Collector 
{
	function insertarPerfil(){
		$rows = self::$db->getRows("insert into perfil VALUES ('$_POST[cedula_identidad]','$_POST[nombre]','$_POST[apellido]','$_POST[estado_civil],'$_POST[genero]','$_POST[direccion_domicilio],'$_POST[telefono])";
		$arrayDemo = array();
			array_push($arrayDemo, $aux);
	return $arrayDemo;
	}
	
	function InsertarPermiso($id){
		$rows = self::$db->getRows("insert into permiso  VALUES ('$_POST[nombre_usuario]','$_POST[email]', '$_POST[contrasena]','$_POST[dop]')";
		$arrayDemo = array();
			array_push($arrayDemo, $aux);
		
	return $arrayDemo;
	}
}

?>