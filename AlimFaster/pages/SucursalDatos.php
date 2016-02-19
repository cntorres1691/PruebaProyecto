<?php 
include_once('Sucursal.php');
include_once('Collector.php');

class SucursalDatos extends Collector 
{
	function consultaGeneral(){		
		$rows = self::$db->getRows("SELECT * FROM sucursal ORDER BY codigo_sucursal");
		$arrayDemo = array();
		foreach ($rows as $c){
			$aux = new Sucursal($c{'codigo_sucursal'},$c{'nombre'},$c{'direccion'},$c{'ciudad'},$c{'capacidad_maxima'},$c{'codigo_producto'},$c{'latitud'},$c{'longitud'});
			array_push($arrayDemo, $aux);
		}	
	return $arrayDemo;
	}

	function insertar($nombre,$direccion,$ciudad,$capmax,$codprod,$latitud,$longitud) {    
		$insertrow = self::$db->insertRow("INSERT INTO sucursal (nombre, direccion, ciudad, capacidad_maxima, codigo_producto, latitud, longitud) VALUES (?, ?, ?, ?, ?, ?, ?)", array("{$nombre}", "{$direccion}", "{$ciudad}", "{$capmax}", "{$codprod}", "{$latitud}", "{$longitud}"));
	}  
	
	function actualizar($nombre,$direccion,$ciudad,$capmax,$codprod,$latitud,$longitud,$codigo) {    
		$insertrow = self::$db->updateRow("UPDATE sucursal SET  nombre = ?, direccion = ?, ciudad = ?, capacidad_maxima = ?, codigo_producto = ?, latitud = ?, longitud = ? WHERE codigo_sucursal = ? ", array("{$nombre}", "{$direccion}", "{$ciudad}", "{$capmax}", "{$codprod}", "{$latitud}", "{$longitud}", "{$codigo}"));
	}  
	
	function delete($id) {    
		$deleterow = self::$db->deleteRow("DELETE FROM sucursal WHERE codigo_sucursal= ?", array("{$id}"));
	}
	
}

?>