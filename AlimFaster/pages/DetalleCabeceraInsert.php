<html>
<head>
</head>

<body>
<div id="main">
<?php
$secuencia=$_POST["codigo"];
$cantidad=$_POST["cantidad"];
$producto=$_POST["producto"];
$precioUni=$_POST["precioUni"];
$precioTot=$_POST["precioTot"];
$numCabFactura=$_POST["numCabFactura"];
echo "Datos Cantidad:".$cantidad." Producto:".$producto." PrecioUnitario:".$precioUni." PrecioTotal:".$precioTot." NumFactura:".$numCabFactura."</br>";


include_once("Detalle_facturaDatos.php");

$Detalle_facturaDatosObj = new Detalle_facturaDatos();
$Detalle_facturaDatosObj->insertar($secuencia,$cantidad,$producto,$precioUni,$precioTot,$numCabFactura);

echo "nuevo linea generada </br>";
echo "<meta http-equiv='Refresh' content='2;tercera.php'>";

?>
</div>
</body>
</html>
