<?php 
if($_POST){
require_once('conexion.php');	
$bandera = $_POST['bandera'];
if($bandera == "1"){	
	$establecimiento = $_POST['establecimiento'];
	$sucursal = $_POST['sucursal'];
	$fechaOrden = $_POST['fechaOrden'];
	$horaOrden = $_POST['horaOrden'];
	$mesaPara = $_POST['mesaPara'];
	$nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $cedula = $_POST['cedula'];
        $telefono = $_POST['telefono'];
        $mail = $_POST['mail'];
        $forma_pago = $_POST['forma_pago'];
	
	$query ="SELECT * FROM reservacion WHERE establecimiento = '".$establecimiento."' 
            AND sucursal= '".$sucursal."' AND fecha_orden= '".$fechaOrden."' AND hora_orden='".$horaOrden."' 
                AND numero_personas='".$mesaPara."'";
	
	$compara =pg_query($conexion,$query); 
	$contar = pg_num_rows($compara);
	if($contar == 0){
	//presentar datos que se ingreso
		echo $apellido." ". $telefono." ".$cedula." ".$mail;
		$query ="INSERT INTO reservacion(establecimiento, sucursal, fecha_orden, hora_orden,numero_personas, nombre, apellido, cedula, telefono, mail, forma_pago) VALUES ('$establecimiento','$sucursal','$fechaOrden','$horaOrden','$mesaPara','$nombre','$apellido','$cedula','$telefono','$mail','$forma_pago')";             
		$insertReserv =pg_query($conexion,$query);
		if($insertReserv){
		echo "<script>alert('insertado')</script>";
		echo"<script>window.location.reload()</script>";
		}				
		}
	else{
		echo "NO HAY DISPONIBLE ES RESERV";
		}
		
	}	
	
if($bandera == "2"){
	$fecha = $_POST['fecha'];
	$hora = $_POST['hora'];
	$mesa = $_POST['mesa'];
	$query = "SELECT * FROM reservacion WHERE fecha_orden='".$fecha."' AND hora_orden='".$hora."' AND numero_personas='".$mesa."'";
	$fechaQuery =pg_query($conexion,$query);
	$contar = pg_num_rows($fechaQuery);
	if($contar <> 0){
		echo "Ya no puedes reservar alguien ha coincidido con todos los parametros de tu reservacion<br/>";
		while($filaFecha = pg_fetch_array($fechaQuery)){
			 
			$reserva_id	= $filaFecha['reserva_id'];
			$establecimiento= $filaFecha['establecimiento'];	
			$sucursal= $filaFecha['sucursal'];	
			$fecha_orden=$filaFecha['fecha_orden'];	
			$hora_orden	=$filaFecha['hora_orden'];	
			$numero_personas=$filaFecha['numero_personas'];	
			$nombre=$filaFecha['nombre'];
				
			echo $reserva_id." - ".$establecimiento." - ".$sucursal." - ".$fecha_orden." - ".$hora_orden." - ".$numero_personas." - ".$nombre."<br/>";
			}
		}
		else{
			echo "Puedes reservar <br/>";
		}
	}
	
if($bandera == "3"){
	$ced = $_POST['ced'];
	$reserva ="SELECT * FROM reservacion WHERE cedula= '".$ced."'";
	$reservaQuery =pg_query($conexion,$reserva);
	
	echo "<div class='tablita'>";
	echo "<div><span>Cod.</span><span>Establecimiento</span> <span>Sucursal</span><span>Fecha Orden</span>
			<span>Hora Orden</span><span>No. Personas</span><span>Nombre</span></div>";

while($filareserva = pg_fetch_array($reservaQuery)){
			 
			$reserva_id	= $filareserva['reserva_id'];
			$establecimiento= $filareserva['establecimiento'];	
			$sucursal= $filareserva['sucursal'];	
			$fecha_orden=$filareserva['fecha_orden'];	
			$hora_orden	=$filareserva['hora_orden'];	
			$numero_personas=$filareserva['numero_personas'];	
			$nombre=$filareserva['nombre'];
			//echo "<div><span>cod.</span><span>descripcion</span> <span>costo</span></div>";
			
			echo "<div>";
			echo "<span><input type='text' name='id' value='".$reserva_id."'/></span>";
			echo "<span><input type='text' name='' value='".$establecimiento."'/></span>";
			echo "<span><input type='text' name='' value='".$sucursal."'/></span>";
			echo "<span><input type='text' name='' value='".$fecha_orden."'/></span>";
			echo "<span><input type='text' name='' value='".$hora_orden."'/></span>";
			echo "<span><input type='text' id='nop' value='".$numero_personas."'/></span>";
			echo "<span><input type='text' id='nom' value='".$nombre."'/></span>";
			echo "<span><input type='button' value='Borrar' onClick='borra($(this))'> <input type='button' value='Modificar' onClick='modifica($(this))'></span>";
			echo "</div>";		
						
	}			
	echo "</div>";	
}	

if($bandera == "4"){
	$numerito = $_POST['numerito'];
	$delete ="DELETE FROM reservacion WHERE reserva_id= '".$numerito."'";
	$deleteQuery =pg_query($conexion,$delete);
	if($deleteQuery ){
	echo "<script>alert('registro eliminado')</script>";
	}	
}	

if($bandera == "5"){
	$numerito = $_POST['numerito'];
	$nopersonas = $_POST['nopersonas'];
	$nombre = $_POST['nombre'];
	$delete ="UPDATE reservacion SET numero_personas='".$nopersonas."', nombre='".$nombre."' WHERE reserva_id= '".$numerito."'";
	$deleteQuery =pg_query($conexion,$delete);
	if($deleteQuery){
	echo "<script>alert('registro actualizado')</script>";
	}	
}	


	
}
?>

