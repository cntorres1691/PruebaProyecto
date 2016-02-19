<?php

include_once("RestauranteDatos.php");
$RestauranteObj = new RestauranteDatos();
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Refresh" content="300"> <!--Se refrescara la pagina cada 300 segundos es decir 5 minutos-->
<meta name="application-name" content="Reserva de mesas,pedidos de menus personalizados  y pagos via online para restaurantes gourmet">
<meta name="author" content="Claudia Torres, clao91torrestorres@gmail.com" /> 
<meta name="copyright" content="AlimFaster"> <!--Nombre de la compañia-->
<meta name="organization" content="AlimFaster S.A." /> <!--Nombre de la Organizacion-->
<meta name="language" content="es-ES" /> <!--Lenguaje de la pagina web español-->
<meta name="classification" content="Reservas Restaurantes">
<meta name="description" content="Reservación de los restaurantes gourmets asociados" /> <!--Descripcion de la pagina web-->
<meta name="generator" content="Bloc de notas"> <!--Cual es la herramienta que se utiliza para editar, crear la pagina web-->
<meta name="keywords" content="elección de reserva de restaurantes gourmet,  reservas de pedidos y pagos online de restaurantes gourmet, elección de restaurantes gourmet" /> <!--Palabras claves para que los navegadores puedan identificar y rankear nuestra pagina web-->
<meta name="robots" content="index,follow"> <!--etiqueta que sirve para que los bucadores puedan recorrer tu pagina web-->
<link href="../css/styleRestaurant.css" rel="stylesheet" type="text/css">
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
<title>Consulta de restaurante Online - Restaurant</title>
</head>
<body >
<!--Esto es para estilos responsive manueales -->
<!--<div class="prueba">Probando</div>
<div class="prueba">Probando</div>
<div class="prueba">Probando</div>
<div class="prueba alfa omega">Probando</div>
-->
<!-- boostrap -->
<div class="jumbotron">
<div class="bannerSuperior">

<!-- Logo Y Texto Banner  -->
<div class="jumbotron">
<div class="banImgText">
				 <div class="col-md-8">
				<img src="../img/logotipo.png" title="Restaurante1"  height="100" width="240" alt="px">
				</div>
				<div class="col-md-4">
				<h1>Restaurant</h1>
				</div>
</div>
				</div>
				
<!-- Botones  -->
<div class="jumbotron">
<div class="botones">
 
				<a href="../index.php"><button type="button" class="botonHomeNextBack"><img src="../img/home.png" height="40" width="40" alt="px"></button></a>
				
				<a href="administracion_pagina.php"><button type="button" class="botonHomeNextBack"><img src="../img/back.png" height="40" width="40" alt="px"></button></a>

</div>
</div>

</div>
</div>
<div class="fondoPantalla" style='width: 100%'>
 <div class="table-responsive">     
<br /> <br /> 

<table style="margin-left:50px" border=1 cellspacing=1 cellpadding=1>
	<tr>
		<th>Id</th>
		<th>Max Personas</th>
		<th>Inicio Atencion</th>
		<th>Fin Atencion</th>
		<th>Razon Social</th>
		<th>Telefono</th>
		<th>Correo</th>
		<th>Autorizacion</th>
		<th>Autorizacion Fecha</th>
		<th>TeleFax</th>
		<th>Telefono Cel</th>
		<th>Imagen</th>
		<th>Modificar</th>
		<th>Eliminar</th>
	</tr>

	<?php foreach ($RestauranteObj->consultaGeneral() as $c){  ?>
	<tr>
		<td><?php echo $c->getCodigo_restaurante(); ?></td>
		<td><?php echo $c->getMax_personas(); ?></td>
		<td><?php echo $c->getInicio_atencion(); ?></td>
		<td><?php echo $c->getFin_atencion(); ?></td>
		<td><?php echo $c->getRazon_social(); ?></td>
		<td><?php echo $c->getTelefono(); ?></td>
		<td><?php echo $c->getCorreo_electronico(); ?></td>
		<td><?php echo $c->getAutorizacion_sri(); ?></td>
		<td><?php echo $c->getAutorizacion_fecha(); ?></td>
		<td><?php echo $c->getTelefax(); ?></td>
		<td><?php echo $c->getTelefono_movil(); ?></td>
		<td><?php echo $c->getNombre_imagen(); ?></td>
		<td>
			<div align="center">
				<form action="editarRestaurante.php" method="post">
					<input type="hidden" name="codigoE" value="<?php echo $c->getCodigo_restaurante(); ?>" />
					<input type="hidden" name="personasE" value="<?php echo $c->getMax_personas(); ?>" />
					<input type="hidden" name="inicioE" value="<?php echo $c->getInicio_atencion(); ?>" />
					<input type="hidden" name="finE" value="<?php echo $c->getFin_atencion(); ?>" />
					<input type="hidden" name="razonE" value="<?php echo $c->getRazon_social(); ?>" />
					<input type="hidden" name="telefonoE" value="<?php echo $c->getTelefono(); ?>" />
					<input type="hidden" name="correoE" value="<?php echo $c->getCorreo_electronico(); ?>" />
					<input type="hidden" name="sriE" value="<?php echo $c->getAutorizacion_sri(); ?>" />
					<input type="hidden" name="autorizacionE" value="<?php echo $c->getAutorizacion_fecha(); ?>" />
					<input type="hidden" name="telefaxE" value="<?php echo $c->getTelefax(); ?>" />
					<input type="hidden" name="movilE" value="<?php echo $c->getTelefono_movil(); ?>" />
					<input type="hidden" name="imagenE" value="<?php echo $c->getNombre_imagen(); ?>" />
					<button class="botonCompra" type="submit" name="submit_mult" value="Editar" title="Editar">
						<img src="../img/edit.png" alt="Editar" width="30" height="30" align="middle" class="icon" title="Editar">
					</button>
				</form>
			</div>
		</td>
		<td>
			<div align="center">
				<form action="eliminaRestaurante.php" method="post">
					<input type="hidden" name="id" value="<?php echo $c->getCodigo_restaurante(); ?>" />
					<button class="botonCompra" type="submit" name="submit_mult" value="Borrar" title="Borrar">
						<img src="../img/eliminar.png" alt="Borrar" width="30" height="30" align="middle" class="icon" title="Borrar">
					</button>
				</form>
			</div>
		</td>
	</tr>
	<?php } ?>

</table>
<br /> <br /> 

<form class="col-md-3" action="crearRestaurante.php" method="post">
    <!--<input type="hidden" name="id" value="<?php echo $linea['id']; ?>" />-->
    <input class="objetoFormReservarForm" style="margin-left:450px" type="submit" name="submit" value="Registrar Restaurante" title="Registrar" />
    <!--<img src="./imagenes/Borrar.png" alt="Borrar" width="30" height="30" align="middle" class="icon" title="Borrar">-->
</form>
<br /> <br /> 

    </tbody>
  </table>
  <br /> <br /> 
  </div>
</div>


<div class="footer">
Contáctenos: desarrollo@gmail.com.<br/> Ecuador 2015
</div>
</body>
</html>
