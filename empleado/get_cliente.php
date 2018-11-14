<?php
	$respuesta = array();

	if (isset($_GET['id'])) {
		# code...
    $id=$_GET['id'];

		$conexion= mysqli_connect("localhost","root","","diagnostico");
		mysqli_set_charset($conexion, "utf8");

		$Query = "SELECT id, empleado_id, nombre, telefono, email FROM `cliente` WHERE id=".$id;



		if ($registro=mysqli_query($conexion,$Query)) {
			# code...
      $respuesta['estado'] = 1;
			$respuesta['mensaje'] = "Empleado encontrado";
			$arrayEmpleado = array();
			$respuesta['empleado'] = array();
			$registro = mysqli_fetch_assoc($registro);
			$arrayEmpleado['id'] = $registro["id"];
      $arrayEmpleado['empleado_id'] = $registro["empleado_id"];
			$arrayEmpleado['nombre'] = $registro["nombre"];
			$arrayEmpleado['telefono'] = $registro["telefono"];
      $arrayEmpleado['email'] = $registro["email"];
			array_push($respuesta['empleado'], $arrayEmpleado);
		} else {
			# code...
			$respuesta["estado"]=0;
			$respuesta["mensaje"] = "Emplado no encontrado";
		}

	}
	else
	{
		//error
		$respuesta["estado"]=0;
		$respuesta["mensaje"]="Falta id";
	}

	echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);

?>
