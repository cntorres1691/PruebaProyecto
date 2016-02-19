<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];
echo "Eliminaci&oacute;n en proceso ....  </br>";
//incluir la libreria de Detalle_facturaDatos
include_once("Detalle_facturaDatos.php");
//creo una instancia de DemoCollector
$Detalle_facturaDatosObj = new Detalle_facturaDatos();
//Ejecuto el metodo para eliminar el objeto Demo indicando el id
$Detalle_facturaDatosObj->delete($id);

echo "<meta http-equiv='Refresh' content='1;tercera.php'>";
?>
