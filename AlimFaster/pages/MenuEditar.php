<?php
$codigo_menu=$_POST["codigo_menu"];
$descripcion=$_POST["descripcion"];

echo "Edici&oacute;n en proceso ....  </br>";
include_once("MenuDatos.php");
$MenuDatosObj = new MenuDatos();
$costo=0;
echo "Datos id :".$codigo_menu."  Nombre:".$descripcion."  costo:".$costo." </br>";
$MenuDatosObj-> actualizar($codigo_menu, $descripcion,$costo);

echo "Datos Actualizados id :".$codigo_menu."  Nombre:".$descripcion."  costo:".$costo." </br>";
echo "<meta http-equiv='Refresh' content='1;MenuFormulario.php'>";

?>
