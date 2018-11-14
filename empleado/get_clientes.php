<?php
	$respuesta = array();

  $conexion= mysqli_connect("localhost","root","","diagnostico");
  mysqli_set_charset($conexion, "utf8");

  $Query = "SELECT id, empleado_id, nombre, telefono, email FROM `cliente`";

  if ($registros = mysqli_query($conexion,$Query)) {
		# code...
    $respuesta['estado'] = 1;
		$respuesta['mensaje'] = "Clientes encontrados";
    $respuesta['clientes'] = array();

		while ($registro = mysqli_fetch_assoc($registros)) {
      // code...
      $arrayCliente = array();

      $arrayCliente["id"] = $registro["id"];
      $arrayCliente["empleado_id"] = $registro["empleado_id"];
      $arrayCliente["nombre"] = $registro["nombre"];
      $arrayCliente["telefono"] = $registro["telefono"];
      $arrayCliente["email"] = $registro["email"];

      array_push($respuesta["clientes"], $arrayCliente);
    }
	} else {
		# code...
		$respuesta["estado"]=0;
		$respuesta["mensaje"] = "Emplado no encontrado";
	}



	echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);

?>
