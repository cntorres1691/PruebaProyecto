<?php 
include_once('Restaurante.php');
include_once('Collector.php');

class RestauranteDatos extends Collector 
{
	function consultaGeneral(){
		$rows = self::$db->getRows("SELECT * FROM restaurante ORDER BY codigo_restaurante");
		$arrayDemo = array();
		foreach ($rows as $c){
			$aux = new Restaurante($c{'codigo_restaurante'},$c{'max_personas'},$c{'inicio_atencion'},$c{'fin_atencion'},$c{'razon_social'},$c{'telefono'},$c{'correo_electronico'},$c{'autorizacion_sri'},$c{'autorizacion_fecha'},$c{'telefax'},$c{'telefono_movil'},$c{'nombre_imagen'});
			array_push($arrayDemo, $aux);
		}	
		return $arrayDemo;
	}

	function insertar($personas,$inicio,$fin,$razon,$telefono,$correo,$sri,$autorizacion,$fax,$movil,$imagen) {    
		$insertrow = self::$db->insertRow("INSERT INTO restaurante (max_personas, inicio_atencion, fin_atencion, razon_social, telefono, correo_electronico, autorizacion_sri, autorizacion_fecha, telefax, telefono_movil, nombre_imagen) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", array("{$personas}", "{$inicio}", "{$fin}", "{$razon}", "{$telefono}", "{$correo}", "{$sri}", "{$autorizacion}", "{$fax}", "{$movil}", "{$imagen}"));
	}  

	function actualizar($personas,$inicio,$fin,$razon,$telefono,$correo,$sri,$autorizacion,$fax,$movil,$imagen,$codigo) {    
		$insertrow = self::$db->updateRow("UPDATE restaurante SET  max_personas = ?, inicio_atencion = ?, fin_atencion = ?, razon_social = ?, telefono = ?, correo_electronico = ?, autorizacion_sri = ?, autorizacion_fecha = ?, telefax = ?, telefono_movil = ?, nombre_imagen = ? WHERE codigo_restaurante = ? ", array( "{$personas}", "{$inicio}", "{$fin}", "{$razon}", "{$telefono}", "{$correo}", "{$sri}", "{$autorizacion}", "{$fax}", "{$movil}", "{$imagen}", "{$codigo}"));
	}  
	
	function delete($id) {    
		$deleterow = self::$db->deleteRow("DELETE FROM restaurante WHERE codigo_restaurante= ?", array("{$id}"));
	}
	
}

?>
