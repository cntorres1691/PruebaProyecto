<html>
<head>
</head>

<body>
<div id="main">
<?php
$codigo_producto=$_POST["codigo_producto"];
$descripcion=$_POST["descripcion"];
$costo=$_POST["costo"];
$pvp=$_POST["pvp"];
$utilidad=$_POST["utilidad"];
$idmenu=$_POST["idmenu"];

echo "Datos id :".$codigo_producto."  Nombre:".$descripcion."  costo:".$costo." pvp:".$pvp." utilidad:".$utilidad." idmenu:".$idmenu." </br>";


include_once("ProductoDatos.php");

$ProductoDatosObj = new ProductoDatos();
$ProductoDatosObj->insertar($codigo_producto, $descripcion,$costo,$pvp,$utilidad,$idmenu);

echo "nuevo linea generada </br>";
echo "<meta http-equiv='Refresh' content='2;ProductoFormulario.php'>";

?>
</div>
</body>
</html>
