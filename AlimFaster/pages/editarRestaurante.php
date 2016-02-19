<?php

	$codE = $_POST['codigoE'];
	$perE = $_POST['personasE'];
	$iniE = $_POST['inicioE'];
	$finE = $_POST['finE'];
	$razE = $_POST['razonE'];
	$telE = $_POST['telefonoE'];
	$corE = $_POST['correoE'];
	$sriE = $_POST['sriE'];
	$autE = $_POST['autorizacionE'];
	$faxE = $_POST['telefaxE'];
	$movE = $_POST['movilE'];
	$imgE = $_POST['imagenE'];
	
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
<h1>Actualizar Restaurante</h1> 
	 <form action="actualizaRestaurante.php" method="post" enctype="multipart/form-data"> 
		<input type="hidden" name="codigo" value="<?php echo $codE; ?>" />
		 Max Personas:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 <input type="text" name="personas" value="<?php echo $perE; ?>" /> <br /> <br />     
		 Inicio Atencion:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 <input type="Time" name="inicio" value="<?php echo $iniE; ?>" /> <br /> <br /> 
		 Fin Atencion:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 <input type="time" name="fin" value="<?php echo $finE; ?>" /> <br /> <br /> 
		 Razon Social:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 <input type="text" name="razon" value="<?php echo $razE; ?>" /> <br /> <br /> 
		 Telefono:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 <input type="text" name="telefono" value="<?php echo $telE; ?>" /> <br /> <br />     
		 Correo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 <input type="text" name="correo" value="<?php echo $corE; ?>" /> <br /> <br /> 
		 Autorizacion SRI:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 <input type="text" name="sri" value="<?php echo $sriE; ?>" /> <br /> <br /> 
		 Autorizacion Fecha:&nbsp;&nbsp;
		 <input type="date" name="autorizacion" value="<?php echo $autE; ?>" /> <br /> <br /> 
	     Telefax:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 <input type="text" name="fax" value="<?php echo $faxE; ?>" /> <br /> <br /> 
		 Telefono Movil:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 <input type="text" name="movil" value="<?php echo $movE; ?>" /> <br /> <br /> 
		 Seleccione imagen:&nbsp; &nbsp; &nbsp; &nbsp;<input type="file" name="fileToUpload" id="fileToUpload" /> <br /><br />
		 <input class="objetoFormReservarForm" type="submit" value="Actualizar" name="submit" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 <a href="consultaRestaurante.php"><button class="botonCompra" type="button"><img src="../img/back.png" height="18" width="32"></button></a>
	 </form>
	 
  </div>
</div>


<div class="footer">
Contáctenos: desarrollo@gmail.com.<br/> Ecuador 2015
</div>
</body>
</html>