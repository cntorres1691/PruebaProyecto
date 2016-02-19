<?php 
include_once('Usuario.php');
include_once('Collector.php');

class UsuarioDatos extends Collector 
{
	function consultaGeneral(){		
		$rows = self::$db->getRows("SELECT * FROM uusuario ORDER BY codigo_usuario");
		$arrayDemo = array();
		foreach ($rows as $c){
			$aux = new Usuario($c{'codigo_usuario'},$c{'nombre'},$c{'usuario'});
			array_push($arrayDemo, $aux);
		}	
	return $arrayDemo;
	}
	
	function delete($id) {    
		$deleterow = self::$db->deleteRow("DELETE FROM uusuario WHERE codigo_usuario= ?", array("{$id}"));
	}
	
}

?>
