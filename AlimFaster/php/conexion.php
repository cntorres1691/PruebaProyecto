<?php
//conectar('localhost', 'postgres', '1234', 'restaurantes');
//conectar('50.63.231.58', 'indesoftcorp', 'Ids1491c', 'indesoftcorp');
//function conectar ($servidor, $user, $pass, $name)
//{/
	//$con = @pg_connect($servidor, $user, $pass) or die("No se pudo realizar la conexion");
	//@pg_dbname()($name, $con) or die("Error con la base de datos");
//	$dbconn = pg_connect("host=localhost dbname=restaurantes user=postgres password=1234")
 //   or die('No se ha podido conectar: ' . pg_last_error());
//	}
//mysql_set_charset('utf8');

$user = "xghiwvoawqouzq";
$password = "xo0DubsWtiMabLhMm8-GkF-Dof";
$dbname = "d16lc3dji7qp0a";
$port = "5432";
$host = "ec2-54-225-199-245.compute-1.amazonaws.com";

$cadenaConexion = "host=$host port=$port dbname=$dbname user=$user password=$password";

$conexion = pg_connect($cadenaConexion) or die("Error en la Conexión: ".pg_last_error());
//echo "<h3>Conexion Exitosa PHP - PostgreSQL</h3><hr><br>";




?>
