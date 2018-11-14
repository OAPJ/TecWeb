<?php
	//1 recueprar las valiables
	$varCantidad= $_GET['Cantidad'];
	$varDocuemnto= $_GET['Documento'];

	//echo "Cantidad: ".$varCantidad;
	//echo "Documento: ".$varDocuemnto;

	//
	$Link = mysqli_connect("localhost","root","","curso");

	mysqli_query($Link, "Use curso;");

	$QueryAlta = "INSERT INTO `pago` (`id`,`cantidad`,`documento`) VALUES (NULL,'".$varCantidad."','".$varDocuemnto."');";

	mysqli_query($Link, $QueryAlta);

	if (mysqli_affected_rows($Link)>0) {
		echo "Registro exitoso";	
	}
	else
	{
		echo "Error desconocido";
	}

	
?>