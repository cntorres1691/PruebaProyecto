<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_POST['id'];

include_once("SucursalDatos.php");
$SucursalObj = new SucursalDatos();
	
//Ejecuto el metodo para eliminar el objeto Demo indicando el id
$SucursalObj->delete($id);

echo "<meta http-equiv='Refresh' content='1;consultaSucursal.php'>";
?>