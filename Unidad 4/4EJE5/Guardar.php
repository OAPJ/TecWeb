<?php  
	//obtener las variables
	$VNombre = $_POST['Nombre'];
	$VApaterno = $_POST['Apaterno'];
	$VAmaterno = $_POST['Amaterno'];

	//Imprimir las variables
	echo $VNombre." ".$VApaterno." ".$VAmaterno;

	//1 Conectar con la base de datos
	$Link = mysql_connect("localhost","root","");

	//2 Seleciionar la bace de datos
	mysql_select_db("curso");

	//3 Hacer la cadena del query
	$varQuery = "INSERT INTO aspirante (Nombre,Paterno,Materno) VALUES('".$VNombre."','".$VApaterno."','".$VAmaterno."')";

	
	//4 Ejecutar el query para guardar la info
	mysql_query($varQuery);

	
?>

<html>
<head>

	<title>Formularios HTML - JS- PHP - MySQL Pag 5</title>
	<meta charset="utf-8">

</head>
<body>
	<p>Hola Guardar</p>
</body>
</html>