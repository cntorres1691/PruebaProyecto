<?php
$idDetalle=$_POST["idDetalle"];
$cantidad=$_POST["cantidad"];
$producto=$_POST["producto"];
$precioUni=$_POST["precioUni"];
$precioTot=$_POST["precioTot"];

echo "Edici&oacute;n en proceso ....  </br>";
include_once("Detalle_facturaDatos.php");
$Detalle_facturaDatosObj = new Detalle_facturaDatos();

$Detalle_facturaDatosObj->actualizar($idDetalle,$cantidad,$producto,$precioUni,$precioTot);

echo "Datos Actualizados id :".$idDetalle."  Nombre:".$nombre."  Cantidad:".$cantidad." Producto:".$producto." PrecioUnitario:".$precioUni." PrecioTotal:".$precioTot." </br>";
echo "<meta http-equiv='Refresh' content='2;tercera.php'>";

?>
