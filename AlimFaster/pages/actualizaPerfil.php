<?php

	include_once("PerfilDatos.php");
	$PerfilObj = new PerfilDatos();
	
	if (!empty($_POST)) {
		if (empty($_POST['codigo']) ||empty($_POST['descripcion']) ||empty($_POST['registro']) ) {

			echo "Existen campos vacios para actualizar perfil";
			echo "<meta http-equiv='Refresh' content='2;consultaPerfil.php'>";			
			
		}
		
		else {
			//actualizamos
			$cod = $_POST['codigo'];
			$des = $_POST['descripcion'];
			$reg = $_POST['registro'];
					
			$PerfilObj->actualizar($des,$reg,$cod);
			
			echo "El perfil se ha actualizado correctamente.";
			echo "<meta http-equiv='Refresh' content='2;consultaPerfil.php'>";
			
		}
		
		
		
	}
?>