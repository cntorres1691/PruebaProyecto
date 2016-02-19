<?php
	session_start();

	include_once("RestauranteDatos.php");
	$RestauranteObj = new RestauranteDatos();

	$arrayDemo = array();
	$arrayName = array();
	foreach ($RestauranteObj->consultaGeneral() as $c){ 
		array_push($arrayDemo, $c->getNombre_imagen());
		array_push($arrayName, $c->getRazon_social());
	}

	$cant = count($arrayDemo);
	$columnas = 3;
	
	if($cant<=3)
		$filas = 1;
	else if($cant<=6)
		$filas = 2;
	else if($cant<=9)
		$filas = 3;
	else if($cant<=12)
		$filas = 4;
	else if($cant<=15)
		$filas = 5;
		
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
<title>Elección de restaurante Online - Restaurant</title>
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
				
				<a href="../index.php"><button type="button" class="botonHomeNextBack"><img src="../img/back.png" height="40" width="40" alt="px"></button></a>

</div>
</div>

</div>
</div>
<div class="fondoPantalla" style='width: 100%'>
 <div class="table-responsive">     
<table class="table">
    <tbody>

	<?php
	$cont = 0;
	for($t=0;$t<$filas;$t++){ ?>	
		<tr>
<?php
		  for($y=0;$y<$columnas;$y++){
		  if($cont == $cant) break;
?>	
			<td>
				<a href="segunda.php">
					<button type="button" class="bordeBoton"><img src="<?php echo '../img/'.$arrayDemo[$cont]; ?>" title="<?php echo $arrayName[$cont]; ?>"  height="150" width="150" alt="px">

					<div vocab="http://schema.org/" typeof="Restaurant">
						  <span property="name" content="Cocolon"></span>
						  <div property="aggregateRating" typeof="AggregateRating">
							<span property="ratingValue" content="4"></span> 
							<span property="reviewCount" content="250"></span>
						  </div>
						  <span property="telephone" content="(04) 257-1051"></span>
						  <meta property="openingHours" content="Mo-Sa 11:00-14:30">
						  <meta property="openingHours" content="Mo-Th 17:00-21:30">
						  <meta property="openingHours" content="Fr-Sa 17:00-22:00">
						  <span property="servesCuisine" content="Tipica ecuatoriana">
						  </span>
						  <span property="priceRange" content="$20 - $80"></span>
					</div>

					</button>
				</a>
            </td> 
<?php
			$cont = $cont + 1;
		   } ?>	
		   </tr>
<?php	}
	?>	
 
	

    </tbody>
  </table>
  </div>
</div>


<div class="footer">
Contáctenos: desarrollo@gmail.com.<br/> Ecuador 2015
</div>
</body>
</html>
