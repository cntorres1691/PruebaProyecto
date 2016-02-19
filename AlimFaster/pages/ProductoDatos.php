<?php 
include_once('Producto.php');
include_once('Collector.php');

class ProductoDatos extends Collector 
{
	function consultaGeneral(){
		$rows = self::$db->getRows("SELECT * FROM producto");
		$arrayDemo = array();
		foreach ($rows as $c){
			$aux = new Producto($c{'codigo_producto'},$c{'descripcion'},$c{'costo'},$c{'pvp'},$c{'utilidad'},$c{'idmenu'});
			array_push($arrayDemo, $aux);
		}
	return $arrayDemo;
	}
	
	function consultaEspecific($id){
		$rows = self::$db->getRows("SELECT * FROM producto WHERE codigo_producto= ?", array("{$id}"));
		$arrayDemo = array();
		foreach ($rows as $c){
			$aux = new Producto($c{'codigo_producto'},$c{'descripcion'},$c{'costo'},$c{'pvp'},$c{'utilidad'},$c{'idmenu'});
			array_push($arrayDemo, $aux);
		}
	return $arrayDemo;
	}
	function insertar($codigo_producto, $descripcion,$costo,$pvp,$utilidad,$idmenu) {    
		$insertrow = self::$db->insertRow("INSERT INTO producto (codigo_producto, descripcion, costo, pvp, utilidad, idmenu) VALUES (?, ?, ?, ?, ?, ?)", array("{$codigo_producto}", "{$descripcion}", "{$costo}", "{$pvp}", "{$utilidad}", "{$idmenu}"));
	}  

	function actualizar($codigo_producto, $descripcion,$costo,$pvp,$utilidad,$idmenu) {    
		$insertrow = self::$db->updateRow("UPDATE producto SET  descripcion = ?, costo = ?, pvp = ?, utilidad = ?, idmenu  = ? WHERE codigo_producto = ? ", array( "{$descripcion}","{$costo}","{$pvp}","{$utilidad}","{$idmenu}","{$codigo_producto}"));
	}   
	
	function delete($id) {    
		$deleterow = self::$db->deleteRow("DELETE FROM producto WHERE codigo_producto= ?", array("{$id}"));
	} 
	
}

?>
