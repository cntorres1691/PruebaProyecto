<?php require_once('php/conexion.php');?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABcvzwpua9QIgDkzdG_afvS0IHC40g_Gs"></script>
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/initmap.js"></script>
<title>Consulta y Reservacion en restaurante</title>
<link href="css/lis.css" rel="stylesheet" type="text/css">
</head>

<body onLoad="firstInitialize()">
<div id='cargando' style='display:none; position:absolute; top:0; bottom:0; left:0; right:0; background-color:black; opacity:0.8;'>
Cargando...</div>
<h1>RESTAURANT</h1>
<form id="formulario" class="col">
	<h2>Datos de Reservación</h2>
	<label>Donde le gustaría comer??</label>
	 <select id="establecimiento"  name="establecimiento" required>
        <option value="">Seleccione una opcion</option>
        <?php
		$query = "SELECT * FROM restaurante";
		$res = pg_query($conexion, $query) or die("Error en la Consulta SQL");

		//$res =mysql_query('SELECT * FROM establecimiento '); 
		//while($filares =mysql_fetch_array($res)){
		while($fila=pg_fetch_array($res)){
			$esta= $fila['razon_social'];
			/*$max= $filares['max_personas'];
			$in= $filares['inicio_atencion'];
			$fin= $filares['fin_atencion'];*/
			echo "<option>".$esta."</option>";
		}
		?>
    </select>
    
    <div>
    	<label>Seleccione Sucursal/Restaurante</label>
        <select id="cord" name="sucursal" required>
        	<option value="">Seleccione una opcion</option>
        </select>
    </div>

    <div id='horarioAtencion'>
        <label>Horario de atencion</label>
        <span></span>
    </div>

    <div>
        <label>Fecha de Orden</label>
        <input type="date" id="fecha" name="fechaOrden" required/>
    </div>

    <div>
        <label>Hora de Orden</label>
        <select id='horarioReserv' name="horaOrden" required>
        	<option value="">Seleccione una opcion</option>
        </select>
    </div>

    <div>
        <label>Numero de Personas</label>
        <select id="mesaPara" required name="mesaPara">
            <option value="">Seleccione una opcion</option>
            
        </select>
    </div>

    <div>
        <label>Mesas Disponibles para cantidad de personas a reservar</label>
        <div class="mesas">
            <span class="mesa3"> Mesa 3</span>
            <span class="mesa4"> Mesa 4</span>
            <span class="mesa5"> Mesa 5</span>
            <span class="mesa1"> Mesa 1</span>
            <span class="mesa2"> Mesa 2</span>
            <span class="mesa5"> Mesa 5</span>
            <span class="mesa3"> Mesa 3</span>
            <span class="mesa2"> Mesa 2</span>
            <span class="mesa4"> Mesa 4</span>
            <span class="mesa1"> Mesa 1</span>
            <div class="msg"></div>
        </div>
        
    </div>

    <h2>DATOS DE USUARIO</h2>
    <!-- Horario de atencion seria solo informacion segun sea el restaurante que se liste-->
    <label>Nombre</label><input type="text" placeholder="Nombre" required id="nombre" name="nombre"/><br/>
	<!-- Horario de atencion seria solo informacion segun sea el restaurante que se liste-->
    <label>Apellidos</label><input type="text" placeholder="Apellido" required id="apellido" name="apellido"/><br/>
    <label>Cedula</label><input type="text" placeholder="Cedula" required id="cedula" name="cedula"/><br/>
    <label>Telefono</label><input type="text" placeholder="Telefono" required id="telefono" name="telefono"/><br/>
    <label>Mail</label><input type="text" placeholder="Mail" required id="mail" name="mail"/><br/>
    <label>Forma de Pago</label><input type="text" placeholder="Forma de Pago" required id="forma_pago" name="forma_pago"/><br/>
    
    <label></label><input type="submit" value="OK"/>
</form>

<div id="mimapa" class="col"></div>

<div id="mostrario"></div>



<form id="consul">
<h2>Consulte su cita</h2>
<input type="text" name="ced" id="ced" placeholder="Numero de cedula "/>
<input type="submit" value="Ver">
</form>
<div id="mireserva"></div>
</body>
<script src="js/actions.js"></script>
</html>
