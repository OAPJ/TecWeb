<?php
    $conexion= mysqli_connect("localhost","root","","diagnostico");
    mysqli_set_charset($conexion, "utf8");

    $id = $_POST["id"];
    $respuesta = array();

    if(isset($id)) {
        $query = "DELETE FROM cliente WHERE id=".$id;
        mysqli_query($conexion, $query)
        if(mysqli_affected_rows($conexion) > 0) {
            $respuesta['estado'] = 1;
            $respuesta['mensaje'] = "Empleado eliminado";
        }
        else {
            $respuesta['estado'] = 0;
            $respuesta['mensaje'] = "Ocurrió un error al tratar de eliminar";
        }
    }
    else {
        // Error
        $respuesta['estado'] = 0;
        $respuesta['mensaje'] = "Falta id";
    }
    echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
?>
