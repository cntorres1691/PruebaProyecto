<?php 
include_once('Perfil.php');
include_once('Collector.php');

class PerfilDatos extends Collector 
{
	function consultaGeneral(){		
		$rows = self::$db->getRows("SELECT * FROM peerfil ORDER BY codigo_perfil");
		$arrayDemo = array();
		foreach ($rows as $c){
			$aux = new Perfil($c{'codigo_perfil'},$c{'descripcion'},$c{'registro'});
			array_push($arrayDemo, $aux);
		}	
	return $arrayDemo;
	}

	function insertar($descripcion,$registro) {    
		$insertrow = self::$db->insertRow("INSERT INTO peerfil (descripcion, registro) VALUES (?, ?)", array("{$descripcion}", "{$registro}"));
	}  
	
	function actualizar($descripcion,$registro,$codigo) {    
		$insertrow = self::$db->updateRow("UPDATE peerfil SET  descripcion = ?, registro = ? WHERE codigo_perfil = ? ", array( "{$descripcion}", "{$registro}", "{$codigo}"));
	}  
	
	function delete($id) {    
		$deleterow = self::$db->deleteRow("DELETE FROM peerfil WHERE codigo_perfil= ?", array("{$id}"));
	}
	
}

?>