<?php 
include_once('Detalle_factura.php');
include_once('Collector.php');

class Detalle_facturaDatos extends Collector 
{
	function consultaGeneral(){
		$rows = self::$db->getRows("SELECT * FROM detalle_factura");
		$arrayDemo = array();
		foreach ($rows as $c){
			$aux = new Detalle_factura($c{'secuencia'},$c{'codigo_producto'},$c{'cantidad'},$c{'precio_unitario'},$c{'precio_total'},$c{'servicio'},$c{'numero_factura'});
			array_push($arrayDemo, $aux);
		}
	return $arrayDemo;
	}
	
	function consultaEspecific($id){
		$rows = self::$db->getRows("SELECT * FROM detalle_factura WHERE secuencia= ?", array("{$id}"));
		$arrayDemo = array();
		foreach ($rows as $c){
			$aux = new Detalle_factura($c{'secuencia'},$c{'codigo_producto'},$c{'cantidad'},$c{'precio_unitario'},$c{'precio_total'},$c{'servicio'},$c{'numero_factura'});
			array_push($arrayDemo, $aux);
		}
	return $arrayDemo;
	}
	
		
	function insertar($secuencia,$cantidad,$producto,$precioUni,$precioTot,$numCabFactura) {    
		$insertrow = self::$db->insertRow("INSERT INTO detalle_factura (secuencia, codigo_producto, cantidad, precio_unitario, precio_total, numero_factura) VALUES (?, ?, ?, ?, ?, ?)", array("{$secuencia}", "{$producto}", "{$cantidad}", "{$precioUni}", "{$precioTot}", "{$numCabFactura}"));
	}  

	function actualizar($idDetalle,$cantidad,$producto,$precioUni,$precioTot) {    
		$insertrow = self::$db->updateRow("UPDATE detalle_factura SET  codigo_producto = ?, cantidad = ?, precio_unitario = ?, precio_total = ?  WHERE secuencia = ? ", array( "{$producto}","{$cantidad}","{$precioUni}","{$precioTot}","{$idDetalle}"));
	}  
	
	function delete($id) {    
		$deleterow = self::$db->deleteRow("DELETE FROM detalle_factura WHERE secuencia= ?", array("{$id}"));
	} 
	
}

?>
