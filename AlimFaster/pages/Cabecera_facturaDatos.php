<?php 
include_once('Cabecera_factura.php');
include_once('Collector.php');

class Cabecera_facturaDatos extends Collector 
{
	function consultaGeneral(){
		$rows = self::$db->getRows("SELECT * FROM cabecera_factura");
		$arrayDemo = array();
		foreach ($rows as $c){
			$aux = new Cabecera_factura($c{'numero_factura'},$c{'fecha'},$c{'hora'},$c{'codigo_pago'},$c{'codigo_cliente'},$c{'subtotal'},$c{'descuento'},$c{'iva'},$c{'total'});
			array_push($arrayDemo, $aux);
		}
	return $arrayDemo;
	}
	
	function consultaEspecific($id){
		$rows = self::$db->getRows("SELECT * FROM cabecera_factura WHERE numero_factura= ?", array("{$id}"));
		$arrayDemo = array();
		foreach ($rows as $c){
			$aux = new Cabecera_factura($c{'numero_factura'},$c{'fecha'},$c{'hora'},$c{'codigo_cliente'},$c{'subtotal'},$c{'descuento'},$c{'iva'},$c{'total'}); 
			array_push($arrayDemo, $aux);
		}
	return $arrayDemo;
	}


}

?>  