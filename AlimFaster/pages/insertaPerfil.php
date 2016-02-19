<?php

	include_once("PerfilDatos.php");
	$PerfilObj = new PerfilDatos();
	
	if (!empty($_POST)) {
		if (empty($_POST['descripcion']) ||empty($_POST['registro'])) {
			echo "Por favor ingrese los datos ";
			echo "<meta http-equiv='Refresh' content='2;crearPerfil.php'>";			
			
		}
	
			//insertamos
			
			$desc = $_POST['descripcion'];
			$reg = $_POST['registro'];
			
			$PerfilObj->insertar($desc,$reg);
			
			echo "El Perfil se ha agregado correctamente.";
			echo "<meta http-equiv='Refresh' content='2;consultaPerfil.php'>";
		
}
?>