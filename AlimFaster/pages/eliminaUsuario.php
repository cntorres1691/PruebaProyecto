<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_POST['id'];

include_once("UsuarioDatos.php");
$UsuarioObj = new UsuarioDatos();
	
//Ejecuto el metodo para eliminar el objeto Demo indicando el id
$UsuarioObj->delete($id);

echo "<meta http-equiv='Refresh' content='1;consultaUsuario.php'>";
?>
