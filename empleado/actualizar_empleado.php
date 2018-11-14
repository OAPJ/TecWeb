<?php

	$respuesta = array();

	if(isset($_POST['id'],$_POST['nombre'], $_POST['usuario'], $_POST['contrasena']))
	{
		$id = $_POST['id'];
		$nombre = $_POST['nombre'];
		$usuario = $_POST['usuario'];
		$contrasena = $_POST['contrasena'];

		$conexion= mysqli_connect("localhost","root","","basename");

		$Query="UPDATE empleado SET nombre='".$nombre"', usuario='".$usuario"', contrasena='".$contrasena"' WHERE id= '".$id"'";

		echo $Query;

		if($Consulta=mysqli_query($conexion,$Query))
		{
			$respuesta["estado"]=1;
			$respuesta["mensaje"]="Se actualizo correctamente";
		}
		else
		{
			$respuesta["estado"]=0;
			$respuesta["mensaje"]="Ocurrio un error desconocido";
		}

	}
	else
	{
		$respuesta["estado"]=0;
		$respuesta["mensaje"]="Datos incompletos";
	}

	echo json_encode($respuesta);

?>
