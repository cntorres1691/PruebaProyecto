	<?php

	include_once("RestauranteDatos.php");
	$RestauranteObj = new RestauranteDatos();
	
	if (!empty($_POST)) {
		if (empty($_POST['personas']) ||empty($_POST['inicio']) ||empty($_POST['fin']) || empty($_POST['razon']) || empty($_POST['telefono']) 
			|| empty($_POST['correo']) || empty($_POST['sri']) || empty($_POST['autorizacion']) || empty($_POST['fax']) || empty($_POST['movil'])) {

			echo "Por favor ingrese los datos ";
			echo "<meta http-equiv='Refresh' content='2;crearRestaurante.php'>";			
			
		}
	
		//subida de imagen
		$target_dir = "../img/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		//validar si el archivo es imagen 
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			if($check !== false) {
				$uploadOk = 1;
			} else {

				echo "El archivo no es una imagen.";
				echo "<meta http-equiv='Refresh' content='2;crearRestaurante.php'>";				
			}
		}

		// Chequear si el archivo ya existe
		if (file_exists($target_file)) {
			echo "El archivo ya existe.";
			echo "<meta http-equiv='Refresh' content='2;crearRestaurante.php'>";
		}

		// Chequear el tamanio 50kb
		if ($_FILES["fileToUpload"]["size"] > 50000) {
			echo "El archivo es demasiado grande.";
			echo "<meta http-equiv='Refresh' content='2;crearRestaurante.php'>";
		}

		// validar formatos de archivos
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
			echo "Solo se permiten archivos JPG, JPEG, PNG & GIF.";
			echo "<meta http-equiv='Refresh' content='2;crearRestaurante.php'>";
		}
		
		// subir el archivo
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

			//insertamos
			
			$per = $_POST['personas'];
			$ini = $_POST['inicio'];
			$fin = $_POST['fin'];
			$raz = $_POST['razon'];
			$tel = $_POST['telefono'];
			$cor = $_POST['correo'];
			$sri = $_POST['sri'];
			$aut = $_POST['autorizacion'];
			$fax = $_POST['fax'];
			$mov = $_POST['movil'];
			$ima = basename( $_FILES["fileToUpload"]["name"]);
		
			$RestauranteObj->insertar($per,$ini,$fin,$raz,$tel,$cor,$sri,$aut,$fax,$mov,$ima);
			
			echo "El restaurante se ha agregado correctamente.";
			echo "<meta http-equiv='Refresh' content='2;consultaRestaurante.php'>";
			
			
		} else {

			echo "Lo sentimos, hubo un error al subir el archivo.";
			echo "<meta http-equiv='Refresh' content='2;crearRestaurante.php'>";

		}
		
		
}
?>