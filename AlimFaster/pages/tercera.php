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


<link href="../css/full-slider.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Confirmacion de Pedido - Restaurante</title>
</head>
<body>
<?php
include_once("Detalle_facturaDatos.php");
include_once("ProductoDatos.php");
include_once("Cabecera_facturaDatos.php");

$Detalle_facturaDatosObj = new Detalle_facturaDatos();
$ProductoDatosObj = new ProductoDatos();
$Cabecera_facturaDatosObj = new Cabecera_facturaDatos();
?>

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
				
				<a href="primera.php"><button type="button" class="botonHomeNextBack"><img src="../img/back.png" height="40" width="40" alt="px"></button></a>
</div>
</div>
		
	</div>
	</div>
	<div class="fondoPantalla" style ="width = 100%">
		<div class="container">
		<table class="table table-striped-edwin"  BORDER=10>
				<thead class="CaberaSuperiorTablaStriped">
					<tr ALIGN=center>
						<th style="display:none">Codigo</th>
						<th>Cantida</th>
						<th>Descripción</th>
						<th>Precio Unitario</th>
						<th>Precio Total</th>
						<th width="3%" colspan="2"></th>
					</tr>
				</thead>
				<tbody class="fuente">
					<?php
					$totalpago=0;
					foreach ($Detalle_facturaDatosObj->consultaGeneral() as $c){
						$totalpago=$totalpago+$c->getPrecio_total(); 
					?>
					<tr>					
						<!--TD><INPUT type="checkbox" NAME="chk"/></TD-->
						<!--td><input type="button" value="x" onclick="Eliminar(this.parentNode.parentNode.rowIndex)"/></td-->
						<td style="display:none"><?php echo $c->getSecuencia(); ?> </td>
						<td><?php echo $c->getCantidad(); ?> </td>
						
						<?php
							$idDetalle =$c->getSecuencia();
							$idPro =$c->getCodigo_producto();
							$numero_factura=$c->getNumero_factura();
							foreach ($ProductoDatosObj->consultaEspecific($idPro) as $e){	
						?>
							<td><?php echo $e->getDescripcion(); ?> </td>
						<?php } ?>
						
						
						<td><?php echo $c->getPrecio_unitario(); ?></td>
						<td><?php echo $c->getPrecio_total(); ?></td>
						<td width="3%"align="center"> <a href="DetalleCabeceraFormularioDeEditar.php?id=<?php echo $c->getSecuencia(); ?>">Editar</a> </td>
						<td width="3%" align="center"><a href="DetalleCabeceraEliminar.php?id=<?php echo $c->getSecuencia(); ?>">Eliminar</a></td>
						 
					</Tr>
					<?php } ?>
					
					<tr>
						<td colspan="3">TOTAL</td>
						<?php/*
							$idPro =1;//No borrar seteado por falta de xavier
							foreach ($Cabecera_facturaDatosObj->consultaEspecific($idPro) as $x){	*/
						?>
							<td colspan="3">$<?php echo $totalpago; ?></td>
							<!--td colspan="2"></*?php echo $x->getTotal(); ?*/> </td--> 
						<?php/* } */?>
					</tr>
				</tbody>
			</table> 
			<a href="DetalleCabeceraFormularioDeInsertar.php?numFactura=<?php echo $numero_factura; ?>&idDetalleFactura=<?php echo $idDetalle;?> ">Nueva Linea</a>
		</div>
  
		<div class="row">  
			<div class="divFormBoton">
				<a href="../cuarta.php"> 
					<input class="objetoConfirmarPedido" type="submit" value="Confirmar Pedido"/>
				</a>
			</div>
		</div>
		<div class="divEspacioEnBlanco"> </div> 
	</div>
	<div class="footer">
	Contáctenos: desarrollo@gmail.com.<br/> Ecuador 2015
	</div>
</body>

</html>