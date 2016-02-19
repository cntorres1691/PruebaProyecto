<?php
	include_once("UsuarioDatos.php");
	$UsuarioObj = new UsuarioDatos();
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
				
				<a href="../index.php"><button type="button" class="botonHomeNextBack"><img src="../img/back.png" height="40" width="40" alt="px"></button></a>

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
	<th>Cedula</th>
	<th>Nombre</th>
	<th>Apellido</th>
	<th>Usuario</th>
	<th>Contraseña</th>
	<th>Estado Civil</th>
</tr>

<?php foreach ($UsuarioObj->consultaGeneral() as $c){  ?>
<tr>
	<td><?php echo $c->getCodigo_persona(); ?></td>
	<td><?php echo $c->getCedula_identidad(); ?></td>
	<td><?php echo $c->getNombre(); ?></td>
	<td><?php echo $c->getApellido(); ?></td>
	<td><?php echo $c->getUsuario(); ?></td>
	<td><?php echo $c->getContrasena(); ?></td>
	<td><?php echo $c->getEstado_civil(); ?></td>
	<td>
			<div align="center">
				<form action="editarUsuario.php" method="post">
					<input type="hidden" name="codigoE" value="<?php echo $c->getCodigo_persona(); ?>" />
					<input type="hidden" name="descripcionE" value="<?php echo $c->getCedula_identidad(); ?>" />
					<input type="hidden" name="registroE" value="<?php echo $c->getNombre(); ?>" />
					<input type="hidden" name="registroE" value="<?php echo $c->getApellido(); ?>" />
					<input type="hidden" name="registroE" value="<?php echo $c->getUsuario(); ?>" />
					<input type="hidden" name="registroE" value="<?php echo $c->getContrasena(); ?>" />
					<input type="hidden" name="registroE" value="<?php echo $c->getEstado_civil(); ?>" />
					<button class="botonCompra" type="submit" name="submit_mult" value="Editar" title="Editar">
						<img src="../img/edit.png" alt="Editar" width="30" height="30" align="middle" class="icon" title="Editar">
					</button>
				</form>
			</div>
		</td>
	<td>
		<div align="center">
			<form action="eliminaUsuario.php" method="post">
				<input type="hidden" name="id" value="<?php echo $c->getCodigo_persona(); ?>" />
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

<form class="col-md-3" action="crearUsuario.php" method="post">
    <!--<input type="hidden" name="id" value="<?php echo $linea['id']; ?>" />-->
    <input class="objetoFormReservarForm" style="margin-left:450px" type="submit" name="submit" value="Registrar Usuario" title="Registrar" />
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