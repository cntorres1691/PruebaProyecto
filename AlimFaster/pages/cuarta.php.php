<?php require_once('php/conexion.php');?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyABcvzwpua9QIgDkzdG_afvS0IHC40g_Gs"></script>
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

    <h1>DATOS DE USUARIO</h1>
    <!-- Horario de atencion seria solo informacion segun sea el restaurante que se liste-->
    <input type="text" placeholder="Nombre" required id="nombre" name="nombre"/>
    
    <input type="submit" value="OK"/>
</form>

<div id="mimapa" class="col"></div>

<div id="mostrario"></div>
</body>
<script src="js/actions.js"></script>
</html>