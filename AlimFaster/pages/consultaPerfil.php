<?php

include_once("PerfilDatos.php");
$PerfilObj = new PerfilDatos();
?>
﻿<!doctype html>
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
<title>Consulta de perfil Online - Restaurant</title>
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
	<th>Descripci&oacute;n</th>
	<th>Registro</th>
	<th>Modificar</th>
	<th>Eliminar</th>
	
</tr>

<?php foreach ($PerfilObj->consultaGeneral() as $c){  ?>
<tr>
	<td><?php echo $c->getCodigo_perfil(); ?></td>
	<td><?php echo $c->getDescripcion(); ?></td>
	<td><?php echo $c->getRegistro(); ?></td>
	<td>
			<div align="center">
				<form action="editarPerfil.php" method="post">
					<input type="hidden" name="codigoE" value="<?php echo $c->getCodigo_perfil(); ?>" />
					<input type="hidden" name="descripcionE" value="<?php echo $c->getDescripcion(); ?>" />
					<input type="hidden" name="registroE" value="<?php echo $c->getRegistro(); ?>" />
					<button class="botonCompra" type="submit" name="submit_mult" value="Editar" title="Editar">
						<img src="../img/edit.png" alt="Editar" width="30" height="30" align="middle" class="icon" title="Editar">
					</button>
				</form>
			</div>
		</td>
	<td>
		<div align="center">
			<form action="eliminaPerfil.php" method="post">
				<input type="hidden" name="id" value="<?php echo $c->getCodigo_perfil(); ?>" />
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

<form class="col-md-3" action="crearPerfil.php" method="post">
    <!--<input type="hidden" name="id" value="<?php echo $linea['id']; ?>" />-->
    <input class="objetoFormReservarForm" style="margin-left:450px" type="submit" name="submit" value="Registrar Perfil" title="Registrar" />
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
