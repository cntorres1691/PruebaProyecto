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
<div class="botones">

				<a href="../index.php"><button type="button" class="botonHomeNextBack"><img src="../img/home.png" height="40" width="40" alt="px"></button></a>
				
				<a href="segunda.php"><button type="button" class="botonHomeNextBack"><img src="../img/back.png" height="40" width="40" alt="px"></button></a>


</div>
</div>
	
<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];
include_once("Detalle_facturaDatos.php");
include_once("Detalle_factura.php");
//$id = 1;
$Detalle_facturaDatosObj = new Detalle_facturaDatos();
?>
	
<div class="fondoPantalla" style ="width = 100%">
	<div class="container">				
<h2>Editar Detalle Factura</h2>
<?php
foreach ($Detalle_facturaDatosObj->consultaEspecific($id) as $ObjDetalle){
?>
	<form action="DetalleCabeceraEditar.php" method="post" >
		<table class="table table-striped-edwin"  BORDER=10>
			<thead class="CaberaSuperiorTablaStriped">
				<tr ALIGN=center>
					<th width="10px">Nombre</th>
					<th width="10px">Texto</th>
				</tr>
			</thead>
			<tbody class="fuente">
									<tr>
										<td width="10px">Codigo:</td width="3%">
										<td width="10px"><input type="decimal" class="input" name="idDetalle" value="<?php echo $ObjDetalle->getSecuencia(); ?>" required></td>								
									</tr>
									<tr>
										<td width="10px">Cantidad:</td>
										<td width="10px"><input type="decimal" class="input" name="cantidad" value="<?php echo $ObjDetalle->getCantidad(); ?>" required></td>								
									</tr>
                    
									<tr>
										<td width="10px">producto:</td>
										<td width="10px"><input type="text" class="input" name="producto" value="<?php echo $ObjDetalle->getCodigo_producto(); ?>" required></td>								
									</tr>
                                    
									<tr>
										<td width="10px">precioUni:</td>
										<td width="10px"><input type="decimal" class="input" name="precioUni" value="<?php echo $ObjDetalle->getPrecio_unitario(); ?>" required></td>								
									</tr>

									<tr>
										<td width="10px">precioTot:</td>
										<td width="10px"><input type="decimal" class="input" name="precioTot" value="<?php echo $ObjDetalle->getPrecio_total(); ?>" required></td>							
									</tr>
                                     
                                    <tr>
										<td width="10px">numCabFactura:</td>
										<td width="10px"><input type="decimal" class="input" name="numCabFactura" value="<?php echo $ObjDetalle->getNumero_factura(); ?>"></td>								
									</tr>   
			</tbody>							
		</table>
		<div class="row">
				<div class="divFormBoton">
					<input type="submit" value="Guardar" class="objetoConfirmarPedido"/>
				</div>
		</div>
	</form>	
	
<?php }?>
	<div class="divEspacioEnBlanco"> </div>
	</div>
</div>
<div class="footer">
	Contáctenos: desarrollo@gmail.com.<br/> Ecuador 2015
	</div>
</body>
</html>