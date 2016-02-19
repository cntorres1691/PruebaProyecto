<?php

	include_once('UsuarioDatos.php');
	$PersonaDatosObj = new UsuarioDatos();
	
	if (!empty($_POST)) {
		if (empty($_POST['usuario']) ||empty($_POST['password']) ) {
			echo "Por favor ingrese los datos ";			
			
		}
	
			//insertamos
			
			$valor=$_POST["usuario"];
			$valor=$_POST["password"];

			
			$PersonaDatosObj->insertarPersona($cedula_identidad, $nombre, $apellido, $estado_civil, $genero, $direccion_domicilio ,$telefono);
			
			echo "El Usuario se ha agregado correctamente.";
		
}
?>