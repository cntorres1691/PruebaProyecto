<?php
	session_start();
?>

<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Refresh" content="300"> <!--Se refrescara la pagina cada 300 segundos es decir 5 minutos-->
<meta name="application-name" content="Reserva de mesas,pedidos de menus personalizados  y pagos via online para restaurantes gourmet">
<meta name="author" content="Roger Peñafiel, rpenafie@espol.edu.ec" /> 
<meta name="copyright" content="AlimFaster"> <!--Nombre de la compañia-->
<meta name="organization" content="AlimFaster S.A." /> <!--Nombre de la Organizacion-->
<meta name="language" content="es-ES" /> <!--Lenguaje de la pagina web español-->
<meta name="classification" content="Reservas">
<meta name="description" content="Reserva de espacio en un restaurante de gourmet asociado" /> <!--Descripcion de la pagina web-->
<meta name="generator" content="Bloc de notas,gedit"> <!--Cual es la herramienta que se utiliza para editar, crear la pagina web-->
<meta name="keywords" content="reserva de restaurantes gourmet,  reserva de pedido y pago online de restaurantes gourmet, reserva de un espacio en restaurantes gourmet" /> <!--Palabras claves para que los navegadores puedan identificar y rankear nuestra pagina web-->
<meta name="robots" content="index,follow"> <!--etiqueta que sirve para que los bucadores puedan recorrer tu pagina web-->
<link href="../css/styleRestaurant.css" rel="stylesheet" type="text/css">
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../js/jquery.js"></script>
<script>
$(window).load(function(){
$("#mapita").click(function(){
	$(this).next().toggle();
});
});
</script>
<title>Formulario de Registro</title>
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
<div class="fondoPantalla" style="width: 100%">
<div class="container">
    <div class="row">
        
        <div class="col-md-8">
        <div class="table-responsive">    
			<form action="">
				
				<h2>Asignar Perfil al Usuario</h2>
				<br/>
				<div class="divForm">
				<label class=" col-xs-3" for="usuario">Usuario</label>
				<input id="usuario" type="text" />
				</div>

				<div class="divForm">
				<label class=" col-xs-3" for="perfil">Perfil</label>
				<input id="perfil" type="text" />
				</div>
				
				<br/>
				<br/>
				
				
				
				<div class="divFormBoton">
					<a href="primera.php">
						<input class="objetoFormReservarForm" type="button" value="Guardar"/>
					</a>
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
				</div>
			</form>	
		</div>
        </div>
    </div>
</div>
		
</div>

<div class="footer">
<br/>
Contactenos: desarrollo@gmail.com.<br/>Ecuador 2015
<br/><br/>
</div>
</body>
</html>