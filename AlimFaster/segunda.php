<?php
session_start(); 
require_once('php/conexion.php');
?>
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
<body>
<div style=" margin-right:250px">
<h1>PLATOS</h1>
<?php
if($_POST){
	if($_POST['btn'] == "sacar"){
		$sesionSacar = $_POST['sesion'];
		unset($_SESSION['sesion'.$sesionSacar]);
		header("segunda.php");
		}
	if($_POST['btn'] == "registrar"){
		$clave= 'sesion'.$_POST['codigo'];
		$_SESSION[$clave]= $clave;
		}	
}	

$con ="SELECT * FROM lis_menu"; 
		$resultado = pg_query($con);
		while($fila =pg_fetch_array($resultado)){
			   $co = $fila['codigo_menu'];
			   $de = $fila['descripcion'];
?>				
<form method="post" action="">
numero de codigo<input type="text" name="codigo" value="<?php echo $co?>"><br>
descripcion<input type="text" name="descripcion" value="<?php echo $de?>"><br>
<input type="submit" name="btn" value="registrar">
</form>
<?php				
		}
?>
<div class="tabla" style="">
<?php		
$num=1;
echo "<div><span>cod.</span><span>descripcion</span> <span>costo</span></div>";
foreach($_SESSION as $clave=>$valor){
	require_once('php/conexion.php');
		$con ="SELECT * FROM lis_menu WHERE codigo_menu = '".substr($clave,6)."'"; 
		$resultado = pg_query($conexion,$con);
		while($fila =pg_fetch_array($resultado)){
		   $co = $fila['codigo_menu'];
		   $de = $fila['descripcion'];
		    $cos = $fila['costo'];
		  		
				echo "<form action='' method='post' class='formi'>";
				echo "<span>".$co. '</span><span>'.$de. '</span><span>'.$cos.'</span>'; 
				echo "<input type='hidden' name='sesion' value='".$co."'/>";
				echo "<input type='submit' name='btn' value='sacar'/>";				
				echo "</form>";
		}
$num++;	
	}
?>
			<div>
					<a href="pages/tercera.php"> 
						<input type="submit" value="Ordenar"/>
					</a >
			</div>
</div>
</div>
</body>
</html>

