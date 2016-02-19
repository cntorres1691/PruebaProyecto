<?php
	session_start();	
?>
﻿<!doctype html>
<html lang="es">
<HEAD>
<TITLE>Añadir Filas </TITLE>
 <SCRIPT language="javascript">

          function deleteRow(tableID) {

               try {

               var table = document.getElementById(tableID);

               var rowCount = table.rows.length;

 

               for(var i=0; i<rowCount; i++) {

                    var row = table.rows[i];

                    var chkbox = row.cells[0].childNodes[0];

                    if(null != chkbox && true == chkbox.checked) {

                         table.deleteRow(i);

                         rowCount--;

                         i--;

                    }

               }

               }catch(e) {

                    alert(e);

               }

          }

 

     </SCRIPT>

</HEAD>

<BODY>

<?php
include_once("ProductoDatos.php");
include_once("Detalle_facturaDatos.php");
$id = 1;
$ProductoDatosObj = new ProductoDatos();
$Detalle_facturaDatosObj = new Detalle_facturaDatos();
?>
	 <INPUT type="button" value="Delete Row" onclick="deleteRow('dataTable');" />
     <TABLE id="dataTable" width="350px" border="1">
		<thead>
			<TR>					
						<th>Eliminar</th>
						<th style="display:none">Codigo</th>
						<th>Cantida</th>
						<th>Descripción</th>
						<th>Precio Unitario</th>
						<th>Precio Total</th>
		  </TR>
		</thead>

		<tbody>
			
			<?php
			foreach ($Detalle_facturaDatosObj->consultaGeneral() as $c){
				/*echo "<div>";
				echo "Codigo: " .$c->getcodigo_producto() . "  Descripcion:  " .$c->getdescripcion() . "  Costo:  " .$c->getCosto() . "  Precio:  " .$c->getPvp() . "  Utilidad:  " .$c->getUtilidad() . "  Contenido_neto:  " .$c->getContenido_neto() . "  Peso_neto:  " .$c->getPeso_neto();
				echo "</div>";*/
			?>	
			  <TR>					
					<TD><INPUT type="checkbox" NAME="chk"/></TD>
					<td style="display:none"><?php echo $c->getSecuencia(); ?> </td>
					<td><?php echo $c->getCantidad(); ?> </td>
					<td>Sopa de Camaron</td>
					<td><?php echo $c->getPrecio_unitario(); ?></td>
					<td><?php echo $c->getPrecio_total(); ?></td>
			  </TR>
			<?php } ?>
			
		</tbody>
     </TABLE>
	 
	 
	 
	

</BODY>

</html>