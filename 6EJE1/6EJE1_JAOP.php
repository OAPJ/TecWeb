<!DOCTYPE html>
<html>
<head>
	<title>Pagos</title>
	<meta charset="utf-8">
	<script src="validaCRUDPagos.js" type="text/javascript"></script>
	<script src="JQuery.js" type="text/javascript"></script>
	<style type="text/css">
		h1 {
		    text-align: center;
		    font-size: 32px;
		    color: gray;
		    box-shadow: 2px 2px 10px #222222;
		    padding: 3px;
		    background-color: #f1f1f1;
		    border-radius: 20px;
		}
		.table{
			background-color: #f4f0f0;
		    text-align: center;
		    padding: 5px;
		    padding-bottom: 20px;
		    margin: 5px auto;
		    width: 45%;
		    box-shadow: 2px 2px 3px #222222;
		    font-size: 20px;
		}
		.boton
		{
			text-decoration: none;
	    padding: 10px;
	    font-weight: 600;
	    font-size: 15px;
	    color: #ffffff;
	    background-color: #5E5E5F;
	    border-radius: 6px;
	    margin: 10px;
		}

	</style>
</head>
<body bgcolor="gray">
	<form action="">
		<h1>Pagos</h1>

		<table width="100%" class="table" align="center">
			<tr>
				<td width="30%">Cantidad:</td>
				<td>
					<input type="text" name="Cantidad" id="Cantidad">
				</td>
			</tr>

			<tr>
				<td width="30%">Documento:</td>
				<td>
					<input type="text" name="Documento" id="Documento">
				</td>
			</tr>

			<tr>
				<td>
					<input type="button" name="Registrar" class="boton" value="Guardar" onclick="Guardar();">
				</td>
				<td>
					<input type="reset" name="Limpiar" class="boton">
				</td>
			</tr>
		</table>
	</form>

	<script type="text/javascript">
		$(document).ready(function(){
			actionRead();
		});
	</script>

	<br>
	<table id="registro" class="table">
		<tr bgcolor="darkgray" style="color: #ffffff ">
			<td>Cantidad</td>
			<td>Documentos</td>
			<td>Acciones</td>
		</tr>
		
		<tbody id="Read">
			<?php 
				include("actionReadPagos.php");
			?>
		</tbody>
			
		
	</table>

</body>
</html>