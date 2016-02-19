<?php

	include_once('UsuarioDatos.php');
	$UsuarioDatosObj = new UsuarioDatos();
	
	if (!empty($_POST)) {
		if (empty($_POST['cedula_identidad']) || $_POST['nombre']) || $_POST['apellido']) || $_POST['estado_civil']) || $_POST['genero']) || $_POST['domicilio']) || $_POST['telefono']) ||$_POST['usuario']) ||empty($_POST['password']) ) {
			echo "Por favor ingrese los datos ";			
			echo "<meta http-equiv='Refresh' content='2;crearUsuario.php'>";
		}
			
			$ced=$_POST["cedula_identidad"];
			$nom=$_POST["nombre"];
			$ape=$_POST["apellido"];
			$use=$_POST["usuario"];
			$esc=$_POST["estado_civil"];
			$gen=$_POST["genero"];
			$dom=$_POST["domicilio"];
			$fono=$_POST["telefono"];

			$UsuarioDatosObj->insertarPersona($ced, $nom, $ape, $use, $esc, $gen, $dom, $fono);
	
			//insertamos usuario
			
			$us=$_POST["usuario"];
			$passw=$_POST["password"];

			$UsuarioDatosObj->insertarUsuario($us, $passw);
			
			echo "El Usuario se ha agregado correctamente.";
			echo "<meta http-equiv='Refresh' content='2;crearUsuario.php'>";
		
}
?>