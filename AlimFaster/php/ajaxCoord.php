<option value="">Seleccione una opcion</option>
<?php 
	require_once('conexion.php');
	$res = ($_POST['res']);
//$est =mysql_query('SELECT * FROM establecimiento WHERE nombre_es = "'.$res.'"'); 
	$query = "SELECT * FROM restaurante where razon_social='".$res."'";
	$resultado = pg_query($conexion, $query) or die("Error en la Consulta SQL");
		while($fila =pg_fetch_array($resultado)){
			$esid = $fila['codigo_restaurante'];
			$nombre_es = $fila['razon_social'];
			$max_personas = $fila['max_personas'];
			$inicio_atencion = $fila['inicio_atencion'];
			$fin_atencion = $fila['fin_atencion'];
?>
<script>enviarDatos(<?php echo "'".$esid."','".$nombre_es."','".$max_personas."','".$inicio_atencion."','".$fin_atencion."'";?>)</script>
<?php			
			}	
	$query = "SELECT * FROM sucursal where nombre='".$res."'";
	$res = pg_query($conexion, $query) or die("Error en la Consulta SQL");

		while($filares =pg_fetch_array($res)){
			$esta = $filares['nombre'];
			$lat= $filares['latitud'];
			$lon = $filares['longitud'];
			$des = $filares['direccion'];
?>
    <option value="<?php echo $esta ?>,<?php echo $lat?>,<?php echo $lon?>,<?php echo $des?>">
	<?php echo $des ?>
    </option>
<?php		
	}
?>

