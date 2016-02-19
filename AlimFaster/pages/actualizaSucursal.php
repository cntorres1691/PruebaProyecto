<?php

	include_once("SucursalDatos.php");
    $SucursalObj = new SucursalDatos();

	if (!empty($_POST)) {
		if (empty($_POST['nombre']) ||empty($_POST['direccion']) ||empty($_POST['ciudad']) || empty($_POST['capacidad_maxima']) || empty($_POST['codigo_producto']) 
			|| empty($_POST['latitud']) || empty($_POST['longitud']) ) {

			echo "Existen campos vacios para actualizar sucursal";
			echo "<meta http-equiv='Refresh' content='2;consultaSucursal.php'>";			
			
		}
		else {
			//actualizamos
			$cod = $_POST['codigo'];
			$nom = $_POST['nombre'];
			$dir = $_POST['direccion'];
			$ciu = $_POST['ciudad'];
			$cap = $_POST['capacidad_maxima'];
			$prd = $_POST['codigo_producto'];
			$lat = $_POST['latitud'];
			$lon = $_POST['longitud'];
			
		
			$SucursalObj->actualizar($nom,$dir,$ciu,$cap,$prd,$lat,$lon,$cod);
			
			echo "La sucursal se ha actualizado correctamente.";
			echo "<meta http-equiv='Refresh' content='2;consultaSucursal.php'>";
		}
		
		
		
		
	}
?>