<?php
    $respuesta = array();

    if(isset($_POST['id'])) {
        if(isset($_POST['empleado_id'], $_POST['nombre'], $_POST['telefono'], $_POST['email'])) {
            // Se incluye el archivo de conexión de la BD
            $conexion= mysqli_connect("localhost","root","","diagnostico");
        		mysqli_set_charset($conexion, "utf8");

            $id = $_POST['id'];
            $emplado_id = $_POST['emplado_id'];
            $nombre = $_POST['nombre'];
            $telefono = $_POST['telefono'];
            $email = $_POST['email'];

            // Se genera la cadena de la consulta
            $query = "UPDATE cliente SET emplado_id=".$emplado_id.", nombre=".$nombre.", telefono=".$telefono.", email=".$email." WHERE id=".$id;

            // Ejecutamos la consulta
            mysqli_query($conexion, $query);
            if(mysqli_affected_rows($con) > 0) {
                $respuesta["estado"] = 1;
                $respuesta["mensaje"] = "Actualización éxitosa";
            }
            else {
                // Error al tratar de actualizar
                $respuesta["estado"] = 0;
                $respuesta["mensaje"] = "Ocurrió un error desconocido";
            }
        }
        else {
            // Error
            $respuesta["estado"] = 0;
            $respuesta["mensaje"] = "Falta(n) campo(s) requerido(s)";
        }
    }
    else {
        // Error
        $respuesta["estado"] = 0;
        $respuesta["mensaje"] = "id no encontrado";
    }

    echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
?>
