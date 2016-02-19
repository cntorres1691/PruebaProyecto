<?php

	include_once("UsuarioDatos.php");
	$UsuarioObj = new PerfilDatos();
	
	if (!empty($_POST)) {
		if (empty($_POST['cedula_identidad']) || $_POST['nombre']) || $_POST['apellido']) || $_POST['estado_civil']) || $_POST['genero']) || $_POST['domicilio']) || $_POST['telefono']) ||$_POST['usuario']) ||empty($_POST['password']) ) ) {

			echo "Existen campos vacios para actualizar";
			echo "<meta http-equiv='Refresh' content='2;registrar_pagina.php'>";			
			
		}
		
		else {
			//actualizar persona
			$ced=$_POST["cedula_identidad"];
			$nom=$_POST["nombre"];
			$ape=$_POST["apellido"];
			$use=$_POST["usuario"];
			$esc=$_POST["estado_civil"];
			$gen=$_POST["genero"];
			$dom=$_POST["domicilio"];
			$fono=$_POST["telefono"];

			$UsuarioDatosObj->actualizarPersona($ced, $nom, $ape, $use, $esc, $gen, $dom, $fono);
	
			//actualizar usuario
			
			$us=$_POST["usuario"];
			$passw=$_POST["password"];

			$UsuarioDatosObj->actualizarUsuario($us, $passw);
			
			echo "El Usuario se ha agregado correctamente.";
		}
		
		
		
	}
?>