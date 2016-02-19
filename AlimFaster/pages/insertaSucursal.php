	<?php

	include_once("SucursalDatos.php");
	$SucursalObj = new SucursalDatos();
	
	if (!empty($_POST)) {
		if (empty($_POST['nombre']) ||empty($_POST['direccion']) ||empty($_POST['ciudad']) || empty($_POST['capacidad_maxima']) || empty($_POST['codigo_producto']) || empty($_POST['latitud']) || empty($_POST['longitud']) ) {
			echo "Por favor ingrese los datos ";
			echo "<meta http-equiv='Refresh' content='2;crearSucursal.php'>";			
		
		}
		//insertamos
		$nombre = $_POST['nombre'];
		$direccion = $_POST['direccion'];
		$ciudad = $_POST['ciudad'];
		$capmax = $_POST['capacidad_maxima'];
		$codprod = $_POST['codigo_producto'];
		$latitud = $_POST['latitud'];
		$longitud = $_POST['longitud'];
		$SucursalObj->insertar($nombre,$direccion,$ciudad,$capmax,$codprod,$latitud,$longitud);
		echo "La sucursal se ha agregado correctamente.";
		echo "<meta http-equiv='Refresh' content='2;consultaSucursal.php'>";
			
			
		
		
		
}
?>