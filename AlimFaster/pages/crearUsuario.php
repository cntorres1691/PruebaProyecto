<?php
	session_start();
	
?>
﻿<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Refresh" content="300"> <!--Se refrescara la pagina cada 300 segundos es decir 5 minutos-->
<meta name="application-name" content="Reserva de mesas,pedidos de menus personalizados  y pagos via online para restaurantes gourmet">
<meta name="author" content="Roger Peñafiel, rogergrp@gmail.com" /> 
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
<title>Creacion Usuario Online - Restaurant</title>
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
<h1>Insertar Persona</h1> 
	 <form action="UsuarioGrabar.php" method="post" > 
		 Nombre:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 <input type="text" name="nombre" value="" /> <br /> <br />     
		 Apellido:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 <input type="text" name="apellido" value="" /> <br /> <br /> 
		 Cedula:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 <input type="text" name="cedula" value="" /> <br /> <br />     
		 Usuario:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 <input type="text" name="usuario" value="" /> <br /> <br /> 
		 Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 <input type="password" name="Password" value="" /> <br /> <br />     
		 Estado_civil:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 <input type="text" name="estado_civil" value="" /> <br /> <br /> 
		 <input  class="objetoFormReservarForm" type="submit" value="Registrar" name="submit" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 <a href="registrar_pagina.php"><button class="botonCompra" type="button"><img src="../img/back.png" height="18" width="32"></button></a>
	 </form>
  </div>
</div>


<div class="footer">
Contáctenos: desarrollo@gmail.com.<br/> Ecuador 2015
</div>
</body>
</html>