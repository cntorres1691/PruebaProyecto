<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_POST['id'];

include_once("RestauranteDatos.php");
$RestauranteObj = new RestauranteDatos();
	
//Ejecuto el metodo para eliminar el objeto Demo indicando el id
$RestauranteObj->delete($id);

echo "<meta http-equiv='Refresh' content='1;consultaRestaurante.php'>";
?>