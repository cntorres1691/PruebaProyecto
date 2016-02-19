<!--?php require_once('php/conexion.php');?-->
<?php
	session_start();
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Refresh" content="300"> <!--Se refrescara la pagina cada 300 segundos es decir 5 minutos-->
<meta name="application-name" content="Reserva de mesas,pedidos de menus personalizados  y pagos via online para restaurantes gourmet">
<meta name="author" content="Liss Contreras, Lzcontre@espol.edu.ec" /> 
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
<title>Formulario de Reserva Online - Restaurant</title>
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

				<a href="../index.html"><button type="button" class="botonHomeNextBack"><img src="../img/home.png" height="40" width="40" alt="px"></button></a>
				
				<a href="tercera.html"><button type="button" class="botonHomeNextBack"><img src="../img/back.png" height="40" width="40" alt="px"></button></a>
</div>
</div>

</div>
</div>
<div class="fondoPantalla" style ="width = 100%">
<div class="container">
    <div class="row">
        
        <div class="col-md-8">
        <div class="table-responsive">    
			<form >
				<h2>DATOS DE RESERVACION</h2>
				<div class="divForm">
				<label class="col-xs-3 " for="fecha">Fecha</label>
				<input id="fecha" type="date" name="bday" />
				</div>
				
				<div class="divForm">
				<label class="col-xs-3" for="hora">Hora</label>
				<input id="hora" type="time" name="usr_time" />
				</div>
			  
				<div class="divForm">
				<label class=" col-xs-3" for="npersona">No. de personas</label>
				<input id="npersona" type="text" />
				</div>
			  
				<div class="divForm">
				<label class=" col-xs-3" for="agencia">Agencia</label>
				<input id="agencia" type="text" />
				<a href="#" id='mapita' ><img src="../img/pin.png" width='25' alt="px"></a>
				<div style='display:none;'>
				<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15948.284331801431!2d-79.90246695!3d-2.1263467499999997!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sec!4v1451873305946" width="600" height="450" style="border:0" allowfullscreen></iframe>
				</div>
				</div>
			 
				<h2>DATOS DEL USUARIO</h2>
				  <div class="divForm">
				  <label class=" col-xs-3" for="nombre">Nombre</label>
				  <input id="nombre" type="text" />
				  </div>
				  
				  <div class="divForm">
				  <label class=" col-xs-3" for="apellido">Apellido</label>
				  <input id="apellido" type="text" />
				  </div>

				<div class="divForm">
				<label class=" col-xs-3" for="cedula">Cedula o Ruc</label>
				<input id="cedula" type="number" />
				</div>
					
				<div class="divForm">	
				<label class=" col-xs-3" for="telefono">Telefono</label>
				<input id="telefono" maxlength="10" type="tel" />
				</div>

				<div class="divForm">				
				<label class=" col-xs-3" for="nombre">Mail</label>
				<input id="mail" type="text" />
				</div>
				
				
				<div class="divForm">
				<label class=" col-xs-3" for="nombre">Cuenta PayPal</label>
				<input id="cuenta" type="text" />
				<a href="#" >Obteniendo</a>
				</div>
				
				<div class="divFormBoton">
					<a href="../index.html"><input class="objetoFormReservarForm" type="button" value="RESERVAR"/></a>
				</div>
			</form>	
		</div>
        </div>
    </div>
</div>


 		
		
		
</div>

<div class="footer">
Contáctenos: desarrollo@gmail.com.<br/> Ecuador 2015
</div>
</body>
</html>
</html>
