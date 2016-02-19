<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_POST['id'];

include_once("PerfilDatos.php");
$PerfilObj = new PerfilDatos();
	
//Ejecuto el metodo para eliminar el objeto Demo indicando el id
$PerfilObj->delete($id);

echo "<meta http-equiv='Refresh' content='1;consultaPerfil.php'>";
?>