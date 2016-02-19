 <?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$codeProd=$_GET["codeProd"];
echo "Eliminaci&oacute;n en proceso ....  </br>";
echo "Datos id :".$codeProd." </br>";
//incluir la libreria de Detalle_facturaDatos
include_once("MenuDatos.php");
//creo una instancia de DemoCollector
$MenuDatosObj = new MenuDatos();
//Ejecuto el metodo para eliminar el objeto Demo indicando el id
$MenuDatosObj->delete($codeProd);

echo "<meta http-equiv='Refresh' content='1;MenuFormulario.php'>";
?>
