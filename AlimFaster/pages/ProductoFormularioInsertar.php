 <?php
	session_start();
?>
<!doctype html>
<html lang="es">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta http-equiv="Refresh" content="300"> <!--Se refrescara la pagina cada 300 segundos es decir 5 minutos-->
<meta name="application-name" content="Reserva de mesas,pedidos de menus personalizados  y pagos via online para restaurantes gourmet">
<meta name="author" content="Edwin Estacio, edwindavid.11@hotmail.com" /> 
<meta name="copyright" content="AlimFaster"> <!--Nombre de la compañia-->
<meta name="organization" content="AlimFaster S.A." /> <!--Nombre de la Organizacion-->
<meta name="language" content="es-ES" /> <!--Lenguaje de la pagina web español-->
<meta name="classification" content="Reservas,Confirmacion">
<meta name="description" content="Confirmacion de pedidos del menu personalizado de comidas gourmet" /> <!--Descripcion de la pagina web-->
<meta name="generator" content="Bloc de notas"> <!--Cual es la herramienta que se utiliza para editar, crear la pagina web-->
<meta name="keywords" content="confirmacion de reserva de pedidos gourmet, confirmacion reservas de pedidos y pagos online de restaurantes gourmet, confirmacion de la personalizacion de pedidos de menus gourmet" /> <!--Palabras claves para que los navegadores puedan identificar y rankear nuestra pagina web-->
<meta name="robots" content="index,follow"> <!--etiqueta que sirve para que los bucadores puedan recorrer tu pagina web-->
<link href="../css/styleRestaurant.css" rel="stylesheet" type="text/css">
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ALimfaster DetFacture</title> 
</head>
<body>
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
</div>
	
<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$codeProd=$_GET["codeProd"]+1;
?>
	
<div class="fondoPantalla" style ="width = 100%">
  <div class="container">				
<h2>Producto Nuevo</h2>

	<form action="ProductoInsertar.php" method="post" >
		<table class="table table-striped-edwin"  BORDER=10>
			<thead class="CaberaSuperiorTablaStriped">
				<tr ALIGN=center>
					<th>Nombre</th>
					<th>Texto</th>
				</tr>
			</thead>
			<tbody class="fuente">
									<tr>
										<td>Codigo:</td>
										<td><input type="decimal" class="input" name="codigo_producto" value="<?php echo $codeProd;?>" required></td>								
									</tr>
									<tr>
										<td>Descripcion:</td>
										<td><input type="decimal" class="input" name="descripcion" value="" required></td>								
									</tr>
                    
									<tr>
										<td>Costo:</td>
										<td><input type="text" class="input" name="costo" value="" required></td>								
									</tr>
                                    
									<tr>
										<td>Pvp:</td>
										<td><input type="decimal" class="input" name="pvp" value="" required></td>								
									</tr>

									<tr>
										<td>Utilidad:</td>
										<td><input type="decimal" class="input" name="utilidad" value="" required></td>								
									</tr>
                                     
                                    <tr>
										<td>IdMenu:</td>
										<td><input type="decimal" class="input" name="idmenu" value="" required></td>								
									</tr>                                
			</tbody>
		</table>
		<div class="row">
				<div class="divFormBoton">
					<input type="submit" value="Guardar" class="objetoConfirmarPedido"/>
				</div>
		</div>
	</form>	
	<div class="divEspacioEnBlanco"> </div>
  </div>
</div>
<div class="footer">
		Contáctenos: desarrollo@gmail.com.<br/> Ecuador 2015
	</div>
</body>
</html>