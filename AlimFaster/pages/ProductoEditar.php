<?php
$codigo_producto=$_POST["codigo_producto"];
$descripcion=$_POST["descripcion"];
$costo=$_POST["costo"];
$pvp=$_POST["pvp"];
$utilidad=$_POST["utilidad"];
$idmenu=$_POST["idmenu"];

echo "Edici&oacute;n en proceso ....  </br>";
include_once("ProductoDatos.php");
$ProductoDatosObj = new ProductoDatos();

$ProductoDatosObj-> actualizar($codigo_producto, $descripcion,$costo,$pvp,$utilidad,$idmenu);

echo "Datos Actualizados id :".$codigo_producto."  Nombre:".$descripcion."  costo:".$costo." pvp:".$pvp." utilidad:".$utilidad." idmenu:".$idmenu." </br>";
echo "<meta http-equiv='Refresh' content='1;ProductoFormulario.php'>";

?>
