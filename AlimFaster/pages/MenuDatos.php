<?php 
include_once('Menu.php');
include_once('Collector.php');

class MenuDatos extends Collector 
{
	function consultaGeneral(){
		$rows = self::$db->getRows("SELECT * FROM lis_menu");
		$arrayDemo = array();
		foreach ($rows as $c){
			$aux = new Menu($c{'codigo_menu'},$c{'descripcion'},$c{'costo'});
			array_push($arrayDemo, $aux);
		}
	return $arrayDemo;
	}
	
	function consultaEspecific($id){
		$rows = self::$db->getRows("SELECT * FROM lis_menu WHERE codigo_menu= ?", array("{$id}"));
		$arrayDemo = array();
		foreach ($rows as $c){
			$aux = new Menu($c{'codigo_menu'},$c{'descripcion'},$c{'costo'});
			array_push($arrayDemo, $aux);
		}
	return $arrayDemo;
	}
	function insertar($codigo_menu, $descripcion,$costo) {    
		$insertrow = self::$db->insertRow("INSERT INTO lis_menu (codigo_menu, descripcion, costo) VALUES (?, ?, ?)", array("{$codigo_menu}", "{$descripcion}", "{$costo}"));
	}  

	function actualizar($codigo_menu, $descripcion,$costo) {    
		$insertrow = self::$db->updateRow("UPDATE lis_menu SET  descripcion = ?, costo = ? WHERE codigo_menu = ? ", array( "{$descripcion}","{$costo}","{$codigo_menu}"));
	}   
	
	
	function delete($id) {    
		$deleterow = self::$db->deleteRow("DELETE FROM lis_menu WHERE codigo_menu= ?", array("{$id}"));
	}
}

?>