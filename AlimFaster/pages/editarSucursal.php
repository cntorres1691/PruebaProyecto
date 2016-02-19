<?php

	$codE = $_POST['codigoE'];
	$nomE = $_POST['nombreE'];
	$dirE = $_POST['direccionE'];
	$ciuE = $_POST['ciudadE'];
	$capE = $_POST['capacidadE'];
	$prdE = $_POST['productoE'];
	$latE = $_POST['latitudE'];
	$lonE = $_POST['longitudE'];
		
	//echo "cod:".$codE." per:".$perE." ini:".$iniE." fin:".$finE." raz:".$razE." tel:".$telE;
	//echo "cor:".$corE." sri:".$sriE." aut:".$autE." fax:".$faxE." mov:".$movE." img:".$imgE;
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
<title>Editar Restaurante Online - Restaurant</title>
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
				

</div>
</div>

</div>
</div>
<div class="fondoPantalla" style='width: 100%'>
 <div class="table-responsive"> 
<h1>Actualizar Sucursal</h1> 
	 <form action="actualizaSucursal.php" method="post"> 
	 <input type="hidden" name="codigo" value="<?php echo $codE; ?>" />
		Nombre:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="nombre" value="<?php echo $nomE; ?>" /> <br /> <br />     
		Direcci&oacute;n:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="direccion" value="<?php echo $dirE; ?>" /> <br /> <br /> 
		Ciudad:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="ciudad" value="<?php echo $ciuE; ?>" /> <br /> <br /> 
		Capacidad M&aacute;xima:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="capacidad_maxima" value="<?php echo $capE; ?>" /> <br /> <br /> 
		C&oacute;digo Producto:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="codigo_producto" value="<?php echo $prdE; ?>" /> <br /> <br />     
		Latitud:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="latitud" value="<?php echo $latE; ?>" /> <br /> <br /> 
		Longitud:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="longitud" value="<?php echo $lonE; ?>" /> <br /> <br /> 
		<input class="objetoFormReservarForm" type="submit" value="Actualizar" name="submit" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="consultaSucursal.php"><button class="botonCompra" type="button"><img src="../img/back.png" height="18" width="32"></button></a>
	 </form>
  </div>
</div>


<div class="footer">
Contáctenos: desarrollo@gmail.com.<br/> Ecuador 2015
</div>
</body>
</html>