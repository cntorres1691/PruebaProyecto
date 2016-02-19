<?php
include_once("ProductoDatos.php");

$id = 1;

$ProductoDatosObj = new ProductoDatos();


foreach ($ProductoDatosObj->consultaGeneral() as $c){
	echo "<div>";
	echo "Codigo: " .$c->getcodigo_producto() . "  Descripcion:  " .$c->getdescripcion() . "  Costo:  " .$c->getCosto() . "  Precio:  " .$c->getPvp() . "  Utilidad:  " .$c->getUtilidad() . "  Contenido_neto:  " .$c->getContenido_neto() . "  Peso_neto:  " .$c->getPeso_neto();
	echo "</div>";
}

?>
