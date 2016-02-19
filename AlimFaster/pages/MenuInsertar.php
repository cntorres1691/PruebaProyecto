<html>
<head>
</head>

<body>
<div id="main">
<?php
$codigo_menu=$_POST["codigo_menu"];
$descripcion=$_POST["descripcion"];

echo "Datos id :".$codigo_menu."  Nombre:".$descripcion." </br>";


include_once("MenuDatos.php");

$MenuDatosObj = new MenuDatos();
$MenuDatosObj->insertar($codigo_menu, $descripcion,0);

echo "nuevo linea generada </br>";
echo "<meta http-equiv='Refresh' content='2;MenuFormulario.php'>";

?>
</div>
</body>
</html>
