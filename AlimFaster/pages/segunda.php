<?php 
	session_start();
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
<meta name="classification" content="Reservas,OrdenarPedido">
<meta name="description" content="Ordenar pedidos de menu de comidas gourmet" /> <!--Descripcion de la pagina web-->
<meta name="generator" content="Bloc de notas,gedit"> <!--Cual es la herramienta que se utiliza para editar, crear la pagina web-->
<meta name="keywords" content="ordenar pedido de reserva gourmet, ordenar pedidos  online de restaurantes gourmet, personalizacion de ordenes de pedidos gourmet" /> <!--Palabras claves para que los navegadores puedan identificar y rankear nuestra pagina web-->
<meta name="robots" content="index,follow"> <!--etiqueta que sirve para que los bucadores puedan recorrer tu pagina web-->

<link href="../css/styleRestaurant.css" rel="stylesheet" type="text/css">
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="../css/menu-vertical.css" type="text/css">
<script type="text/javascript" src="../js/jquery.js"></script>
<script>
$(window).load(function(){
  $("#entrada").click(function(){
	$("#divEntradas").show();
    $("#divSopas").hide();
	$("#divPtsFuerte").hide();
	$("#divBebidas").hide();
	$("#divPostre").hide();
  });
  $("#sopas").click(function(){
    $("#divEntradas").hide();
    $("#divSopas").show();
	$("#divPtsFuerte").hide();
	$("#divBebidas").hide();
	$("#divPostre").hide();
  });
   $("#platoFuerte").click(function(){
    $("#divEntradas").hide();
    $("#divSopas").hide();
	$("#divPtsFuerte").show();
	$("#divBebidas").hide();
	$("#divPostre").hide();
  });
  $("#bebidas").click(function(){
    $("#divEntradas").hide();
    $("#divSopas").hide();
	$("#divPtsFuerte").hide();
	$("#divBebidas").show();
	$("#divPostre").hide();
  });
  $("#postre").click(function(){
    $("#divEntradas").hide();
    $("#divSopas").hide();
	$("#divPtsFuerte").hide();
	$("#divBebidas").hide();
	$("#divPostre").show();
  });
});
</script>
<title>Reserva Online - Restaurant</title>
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

				<a href="../index.php"><button type="button" class="botonHomeNextBack"><img src="../img/home.png" height="40" width="40p" alt="px"></button></a>
				
				<a href="primera.php"><button type="button" class="botonHomeNextBack"><img src="../img/back.png" height="40" width="40" alt="px"></button></a>

</div>
</div>

</div>
</div>
<div class="fondoPantalla" style ="width = 100%">
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <ul id="nav">
                <li ><a id="entrada" class="listado" href="#">Entrada</a></li>
				<li><a  id="sopas" class="listado" href="#">Sopas</a></li>
				<li><a id="platoFuerte" class="listado" href="#">Plato Fuerte</a></li>
				<li><a id="bebidas" class="listado" href="#">Bebidas</a></li>
				<li><a id="postre" class="listado" href="#">Postre</a></li>
            </ul>
        </div>
        <div id="divEntradas"  class="col-md-8">
        <div class="table-responsive">     
		<table class="table table-bordered">
			<tbody>
			<tr>
            <td>
			<p class="objLabel">Entrada1:</p>
                <button type="button" class="bordeBoton"><img src="../img/ent1.jpg" title="Restaurante1"  height="150" width="150" alt="px"></button>
				 <div class="row">
				 <div class="col-md-4">
				<p class="objLabel">Cantidad:</p>
				</div>
				<div class="col-md-4">
				<input class="objFormCaja" type="text" name="cantidad">
				<button type="button" class="botonCompra"><img src="../img/compra.png" height="30" width="30" alt="px"></button>
				</div>
				</div>
				</div>
			</td>
            <td>
			<p class="objLabel">Entrada2:</p>
                <button type="button" class="bordeBoton"><img src="../img/ent2.jpg" title="Restaurante2"  height="150" width="150" alt="px"></button>
								 <div class="row">
				 <div class="col-md-4">
				<p class="objLabel">Cantidad:</p>
				</div>
				<div class="col-md-4">
				<input class="objFormCaja" type="text" name="cantidad">
				<button type="button" class="botonCompra"><img src="../img/compra.png" height="30" width="30" alt="px"></button>
				</div>
				</div>
            </td>
            <td>
			<p class="objLabel">Entrada3:</p>
                 <button type="button" class="bordeBoton"><img src="../img/ent3.jpg" title="Restaurante3"  height="150" width="150" alt="px"></button>
				 				 <div class="row">
				 <div class="col-md-4">
				<p class="objLabel">Cantidad:</p>
				</div>
				<div class="col-md-4">
				<input class="objFormCaja" type="text" name="cantidad">
				<button type="button" class="botonCompra"><img src="../img/compra.png" height="30" width="30" alt="px"></button>
				</div>
				</div>
            </td>
            
          </tr>
		   <tr>
            <td>
				<p class="objLabel">Entrada4:</p>
                <button type="button" class="bordeBoton"><img src="../img/ent4.jpg" title="Restaurante5"  height="150" width="150" alt="px"></button>
								 <div class="row">
				 <div class="col-md-4">
				<p class="objLabel">Cantidad:</p>
				</div>
				<div class="col-md-4">
				<input class="objFormCaja" type="text" name="cantidad">
				<button type="button" class="botonCompra"><img src="../img/compra.png" height="30" width="30" alt="px"></button>
				</div>
				</div>
            </td>
            <td>
			<p class="objLabel">Entrada5:</p>
                <button type="button" class="bordeBoton"><img src="../img/ent5.jpg" title="Restaurante6"  height="150" width="150" alt="px"></button>
								 <div class="row">
				 <div class="col-md-4">
				<p class="objLabel">Cantidad:</p>
				</div>
				<div class="col-md-4">
				<input class="objFormCaja" type="text" name="cantidad">
				<button type="button" class="botonCompra"><img src="../img/compra.png" height="30" width="30" alt="px"></button>
				</div>
				</div>
            </td>
            <td>
			<p class="objLabel">Entrada6:</p>
                 <button type="button" class="bordeBoton"><img src="../img/ent6.jpg" title="Restaurante7"  height="150" width="150" alt="px"></button>
				 				 <div class="row">
				 <div class="col-md-4">
				<p class="objLabel">Cantidad:</p>
				</div>
				<div class="col-md-4">
				<input class="objFormCaja" type="text" name="cantidad">
				<button type="button" class="botonCompra"><img src="../img/compra.png" height="30" width="30" alt="px"></button>
				</div>
				</div>
            </td>
          
          </tr>
    </tbody>
  </table>
  </div>
    </div>
  <!-- SEGUNDO DIV-->
    <div id="divSopas" style='display:none;' class="col-md-8">
        <div class="table-responsive">     
		<table class="table table-bordered">
			<tbody>
			<tr>
            <td>
			<p class="objLabel">Sopa1:</p>
                <button type="button" class="bordeBoton"><img src="../img/sop1.jpg" title="Restaurante1"  height="150" width="150" alt="px"></button>
				 <div class="row">
				 <div class="col-md-4">
				<p class="objLabel">Cantidad:</p>
				</div>
				<div class="col-md-4">
				<input class="objFormCaja" type="text" name="cantidad">
				<button type="button" class="botonCompra"><img src="../img/compra.png" height="30" width="30" alt="px"></button>
				</div>
				</div>
				</div>
			</td>
            <td>
			<p class="objLabel">Sopa2:</p>
                <button type="button" class="bordeBoton"><img src="../img/sop2.jpg" title="Restaurante2"  height="150" width="150" alt="px"></button>
								 <div class="row">
				 <div class="col-md-4">
				<p class="objLabel">Cantidad:</p>
				</div>
				<div class="col-md-4">
				<input class="objFormCaja" type="text" name="cantidad">
				<button type="button" class="botonCompra"><img src="../img/compra.png" height="30" width="30" alt="px"></button>
				</div>
				</div>
            </td>
            <td>
			<p class="objLabel">Sopa3:</p>
                 <button type="button" class="bordeBoton"><img src="../img/sop3.jpg" title="Restaurante3"  height="150" width="150" alt="px"></button>
				 				 <div class="row">
				 <div class="col-md-4">
				<p class="objLabel">Cantidad:</p>
				</div>
				<div class="col-md-4">
				<input class="objFormCaja" type="text" name="cantidad">
				<button type="button" class="botonCompra"><img src="../img/compra.png" height="30" width="30" alt="px"></button>
				</div>
				</div>
            </td>
            
          </tr>
		   <tr>
            <td>
				<p class="objLabel">Sopa4:</p>
                <button type="button" class="bordeBoton"><img src="../img/sop4.jpg" title="Restaurante5"  height="150" width="150" alt="px"></button>
								 <div class="row">
				 <div class="col-md-4">
				<p class="objLabel">Cantidad:</p>
				</div>
				<div class="col-md-4">
				<input class="objFormCaja" type="text" name="cantidad">
				<button type="button" class="botonCompra"><img src="../img/compra.png" height="30" width="30" alt="px"></button>
				</div>
				</div>
            </td>
            <td>
			<p class="objLabel">Sopa5:</p>
                <button type="button" class="bordeBoton"><img src="../img/sop5.jpg" title="Restaurante6"  height="150" width="150" alt="px"></button>
								 <div class="row">
				 <div class="col-md-4">
				<p class="objLabel">Cantidad:</p>
				</div>
				<div class="col-md-4">
				<input class="objFormCaja" type="text" name="cantidad">
				<button type="button" class="botonCompra"><img src="../img/compra.png" height="30" width="30" alt="px"></button>
				</div>
				</div>
            </td>
                    
          </tr>
    </tbody>
  </table>
  </div>
  </div>
  <!-- TERCER DIV-->
    <div id="divPtsFuerte" style='display:none;' class="col-md-8">
        <div class="table-responsive">     
		<table class="table table-bordered">
			<tbody>
			<tr>
            <td>
			<p class="objLabel">Plato Fuerte 1:</p>
                <button type="button"class="bordeBoton"><img src="../img/pf1.jpg" title="Restaurante1"  height="150px" width="150px"></button>
				 <div class="row">
				 <div class="col-md-4">
				<p class="objLabel">Cantidad:</p>
				</div>
				<div class="col-md-4">
				<input class="objFormCaja" type="text" name="cantidad">
				<button type="button"class="botonCompra"><img src="../img/compra.png" height="30px" width="30px"></button>
				</div>
				</div>
				</div>
			</td>
            <td>
			<p class="objLabel">Plato Fuerte 2:</p>
                <button type="button"class="bordeBoton"><img src="../img/pf2.jpg" title="Restaurante2"  height="150px" width="150px";></button>
								 <div class="row">
				 <div class="col-md-4">
				<p class="objLabel">Cantidad:</p>
				</div>
				<div class="col-md-4">
				<input class="objFormCaja" type="text" name="cantidad">
				<button type="button"class="botonCompra"><img src="../img/compra.png" height="30px" width="30px"></button>
				</div>
				</div>
            </td>
            <td>
			<p class="objLabel">Plato Fuerte 3:</p>
                 <button type="button"class="bordeBoton"><img src="../img/pf3.jpg" title="Restaurante3"  height="150px" width="150px";></button>
				 				 <div class="row">
				 <div class="col-md-4">
				<p class="objLabel">Cantidad:</p>
				</div>
				<div class="col-md-4">
				<input class="objFormCaja" type="text" name="cantidad">
				<button type="button"class="botonCompra"><img src="../img/compra.png" height="30px" width="30px"></button>
				</div>
				</div>
            </td>
            
          </tr>
		   <tr>
            <td>
				<p class="objLabel">Plato Fuerte 4:</p>
                <button type="button"class="bordeBoton"><img src="../img/pf4.jpg" title="Restaurante5"  height="150px" width="150px"></button>
								 <div class="row">
				 <div class="col-md-4">
				<p class="objLabel">Cantidad:</p>
				</div>
				<div class="col-md-4">
				<input class="objFormCaja" type="text" name="cantidad">
				<button type="button"class="botonCompra"><img src="../img/compra.png" height="30px" width="30px"></button>
				</div>
				</div>
            </td>
            <td>
			<p class="objLabel">Plato Fuerte 5:</p>
                <button type="button"class="bordeBoton"><img src="../img/pf5.jpg" title="Restaurante6"  height="150px" width="150px";></button>
								 <div class="row">
				 <div class="col-md-4">
				<p class="objLabel">Cantidad:</p>
				</div>
				<div class="col-md-4">
				<input class="objFormCaja" type="text" name="cantidad">
				<button type="button"class="botonCompra"><img src="../img/compra.png" height="30px" width="30px"></button>
				</div>
				</div>
            </td>
            <td>
			<p class="objLabel">Plato Fuerte 6:</p>
                 <button type="button"class="bordeBoton"><img src="../img/pf6.jpg" title="Restaurante7"  height="150px" width="150px";></button>
				 				 <div class="row">
				 <div class="col-md-4">
				<p class="objLabel">Cantidad:</p>
				</div>
				<div class="col-md-4">
				<input class="objFormCaja" type="text" name="cantidad">
				<button type="button"class="botonCompra"><img src="../img/compra.png" height="30px" width="30px"></button>
				</div>
				</div>
            </td>
          
          </tr>
    </tbody>
  </table>
  </div>
  </div>
  <!-- CUARTO DIV-->
    <div id="divBebidas" style='display:none;' class="col-md-8">
        <div class="table-responsive">     
		<table class="table table-bordered">
			<tbody>
			<tr>
            <td>
			<p class="objLabel">Bebida 1:</p>
                <button type="button"class="bordeBoton"><img src="../img/beb1.jpg" title="Restaurante1"  height="150px" width="150px"></button>
				 <div class="row">
				 <div class="col-md-4">
				<p class="objLabel">Cantidad:</p>
				</div>
				<div class="col-md-4">
				<input class="objFormCaja" type="text" name="cantidad">
				<button type="button"class="botonCompra"><img src="../img/compra.png" height="30px" width="30px"></button>
				</div>
				</div>
				</div>
			</td>
            <td>
			<p class="objLabel">Bebida 2:</p>
                <button type="button"class="bordeBoton"><img src="../img/beb2.jpg" title="Restaurante2"  height="150px" width="150px";></button>
								 <div class="row">
				 <div class="col-md-4">
				<p class="objLabel">Cantidad:</p>
				</div>
				<div class="col-md-4">
				<input class="objFormCaja" type="text" name="cantidad">
				<button type="button"class="botonCompra"><img src="../img/compra.png" height="30px" width="30px"></button>
				</div>
				</div>
            </td>
            <td>
			<p class="objLabel">Bebida 3:</p>
                 <button type="button"class="bordeBoton"><img src="../img/beb3.jpg" title="Restaurante3"  height="150px" width="150px";></button>
				 				 <div class="row">
				 <div class="col-md-4">
				<p class="objLabel">Cantidad:</p>
				</div>
				<div class="col-md-4">
				<input class="objFormCaja" type="text" name="cantidad">
				<button type="button"class="botonCompra"><img src="../img/compra.png" height="30px" width="30px"></button>
				</div>
				</div>
            </td>
            
          </tr>
		   <tr>
            <td>
				<p class="objLabel">Bebida 4:</p>
                <button type="button"class="bordeBoton"><img src="../img/beb4.jpg" title="Restaurante5"  height="150px" width="150px"></button>
								 <div class="row">
				 <div class="col-md-4">
				<p class="objLabel">Cantidad:</p>
				</div>
				<div class="col-md-4">
				<input class="objFormCaja" type="text" name="cantidad">
				<button type="button"class="botonCompra"><img src="../img/compra.png" height="30px" width="30px"></button>
				</div>
				</div>
            </td>
            <td>
			<p class="objLabel">Bebida 5:</p>
                <button type="button"class="bordeBoton"><img src="../img/beb5.jpg" title="Restaurante6"  height="150px" width="150px";></button>
								 <div class="row">
				 <div class="col-md-4">
				<p class="objLabel">Cantidad:</p>
				</div>
				<div class="col-md-4">
				<input class="objFormCaja" type="text" name="cantidad">
				<button type="button"class="botonCompra"><img src="../img/compra.png" height="30px" width="30px"></button>
				</div>
				</div>
            </td>
            <td>
			<p class="objLabel">Bebida 6:</p>
                 <button type="button"class="bordeBoton"><img src="../img/beb6.jpg" title="Restaurante7"  height="150px" width="150px";></button>
				 				 <div class="row">
				 <div class="col-md-4">
				<p class="objLabel">Cantidad:</p>
				</div>
				<div class="col-md-4">
				<input class="objFormCaja" type="text" name="cantidad">
				<button type="button"class="botonCompra"><img src="../img/compra.png" height="30px" width="30px"></button>
				</div>
				</div>
            </td>
          
          </tr>
		  <tr>
            <td>
				<p class="objLabel">Bebida 7:</p>
                <button type="button"class="bordeBoton"><img src="../img/beb7.jpg" title="Restaurante5"  height="150px" width="150px"></button>
								 <div class="row">
				 <div class="col-md-4">
				<p class="objLabel">Cantidad:</p>
				</div>
				<div class="col-md-4">
				<input class="objFormCaja" type="text" name="cantidad">
				<button type="button"class="botonCompra"><img src="../img/compra.png" height="30px" width="30px"></button>
				</div>
				</div>
            </td>
            <td>
			<p class="objLabel">Bebida 8:</p>
                <button type="button"class="bordeBoton"><img src="../img/beb8.jpg" title="Restaurante6"  height="150px" width="150px";></button>
								 <div class="row">
				 <div class="col-md-4">
				<p class="objLabel">Cantidad:</p>
				</div>
				<div class="col-md-4">
				<input class="objFormCaja" type="text" name="cantidad">
				<button type="button"class="botonCompra"><img src="../img/compra.png" height="30px" width="30px"></button>
				</div>
				</div>
            </td>
            <td>
			<p class="objLabel">Bebida 9:</p>
                 <button type="button"class="bordeBoton"><img src="../img/beb9.jpg" title="Restaurante7"  height="150px" width="150px";></button>
				 				 <div class="row">
				 <div class="col-md-4">
				<p class="objLabel">Cantidad:</p>
				</div>
				<div class="col-md-4">
				<input class="objFormCaja" type="text" name="cantidad">
				<button type="button" class="botonCompra"><img src="../img/compra.png" height="30px" width="30px"></button>
				</div>
				</div>
            </td>         
          </tr>
    </tbody>
  </table>
  </div>
  </div>
    <!-- QUINTO DIV-->
    <div id="divPostre" style='display:none;' class="col-md-8">
        <div class="table-responsive">     
		<table class="table table-bordered">
			<tbody>
			<tr>
            <td>
			<p class="objLabel">Postre 1:</p>
                <button type="button"class="bordeBoton"><img src="../img/pt1.jpg" title="Restaurante1"  height="150px" width="150px"></button>
				 <div class="row">
				 <div class="col-md-4">
				<p class="objLabel">Cantidad:</p>
				</div>
				<div class="col-md-4">
				<input class="objFormCaja" type="text" name="cantidad">
				<button type="button"class="botonCompra"><img src="../img/compra.png" height="30px" width="30px"></button>
				</div>
				</div>
				</div>
			</td>
            <td>
			<p class="objLabel">Postre 1:</p>
                <button type="button"class="bordeBoton"><img src="../img/pt2.jpg" title="Restaurante2"  height="150px" width="150px";></button>
								 <div class="row">
				 <div class="col-md-4">
				<p class="objLabel">Cantidad:</p>
				</div>
				<div class="col-md-4">
				<input class="objFormCaja" type="text" name="cantidad">
				<button type="button"class="botonCompra"><img src="../img/compra.png" height="30px" width="30px"></button>
				</div>
				</div>
            </td>
            <td>
			<p class="objLabel">Postre 3</p>
                 <button type="button"class="bordeBoton"><img src="../img/pt3.jpg" title="Restaurante3"  height="150px" width="150px";></button>
				 				 <div class="row">
				 <div class="col-md-4">
				<p class="objLabel">Cantidad:</p>
				</div>
				<div class="col-md-4">
				<input class="objFormCaja" type="text" name="cantidad">
				<button type="button"class="botonCompra"><img src="../img/compra.png" height="30px" width="30px"></button>
				</div>
				</div>
            </td>
            
          </tr>
		   <tr>
            <td>
				<p class="objLabel">Postre 1:</p>
                <button type="button"class="bordeBoton"><img src="../img/pt4.jpg" title="Restaurante5"  height="150px" width="150px"></button>
								 <div class="row">
				 <div class="col-md-4">
				<p class="objLabel">Cantidad:</p>
				</div>
				<div class="col-md-4">
				<input class="objFormCaja" type="text" name="cantidad">
				<button type="button"class="botonCompra"><img src="../img/compra.png" height="30px" width="30px"></button>
				</div>
				</div>
            </td>
            <td>
			<p class="objLabel">Postre 5:</p>
                <button type="button"class="bordeBoton"><img src="../img/pt5.jpg" title="Restaurante6"  height="150px" width="150px";></button>
								 <div class="row">
				 <div class="col-md-4">
				<p class="objLabel">Cantidad:</p>
				</div>
				<div class="col-md-4">
				<input class="objFormCaja" type="text" name="cantidad">
				<button type="button"class="botonCompra"><img src="../img/compra.png" height="30px" width="30px"></button>
				</div>
				</div>
            </td>
            <td>
			<p class="objLabel">Postre 6:</p>
                 <button type="button"class="bordeBoton"><img src="../img/pt6.jpg" title="Restaurante7"  height="150px" width="150px";></button>
				 				 <div class="row">
				 <div class="col-md-4">
				<p class="objLabel">Cantidad:</p>
				</div>
				<div class="col-md-4">
				<input class="objFormCaja" type="text" name="cantidad">
				<button type="button"class="botonCompra"><img src="../img/compra.png" height="30px" width="30px"></button>
				</div>
				</div>
            </td>
          
          </tr>
    </tbody>
  </table>
  </div>
  
  </div></div>
        </div>
        
        <div class="row">
			<div class="divFormBoton">
				<a href="tercera.php">
					<input class="objetoOrdenarPedido" type="submit" value="Ordenar Pedido"/>
				</a>
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
