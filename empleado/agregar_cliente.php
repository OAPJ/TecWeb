<?php
    $respuesta = array();

    if(isset($_POST['empleado_id'], $_POST['nombre'], $_POST['telefono'], $_POST['email'])) {
        // Se incluye el archivo de conexión de la BD
        $conexion= mysqli_connect("localhost","root","","diagnostico");
    		mysqli_set_charset($conexion, "utf8");

        $emplado_id = $_POST['emplado_id'];
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];

        // Se genera la cadena de la consulta
        $query = "INSERT INTO cliente(emplado_id, nombre, telefono, email) VALUES(".$emplado_id.",".$nombre.", ".$telefono.", ".$email.")";

        // Ejecutamos la consulta
        if($ans = mysqli_query($conexion, $query)) {
            $respuesta["estado"] = 1;
            $respuesta["mensaje"] = "Registro éxitoso";
        }
        else {
            // Error al tratar de agregar
            $respuesta["estado"] = 0;
            $respuesta["mensaje"] = "Ocurrió un error desconocido";
        }
    }
    else {
        // Error
        $respuesta["estado"] = 0;
        $respuesta["mensaje"] = "Falta(n) campo(s) requerido(s)";
    }

    echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
?>
