<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Formulario 2 - HTML - JS - PHP - MySQL</title>
        <link rel="stylesheet" href="main.css">
        <script src="valida.js" charset="utf-8"></script>
    </head>
    <body>
        <div class="contenido">
            <h1>Registro</h1>
            <form class="registro" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return validar();">
                <p id="alerta"></p>
                <table id="tabla">
                    <tr>
                        <td><label for="nombre">Nombre: </label></td>
                        <td><input type="text" id="nombre" name="nombre" required placeholder="Escriba su nombre"></td>
                    </tr>
                    <tr>
                        <td><label for="apaterno">Apellido paterno: </label></td>
                        <td><input type="text" id="apaterno" name="apaterno" required placeholder="Escriba su apellido"></td>
                    </tr>
                    <tr>
                        <td><label for="amaterno">Apellido materno: </label></td>
                        <td><input type="text" id="amaterno" name="amaterno" required placeholder="Escriba su segundo apellido"></td>
                    </tr>
                    <tr>
                        <td><label for="fechaNac">Fecha de nacimiento: </label></td>
                        <td><input type="date" id="fechaNac" required name="fechaNac"></td>
                    </tr>
                    <tr>
                        <td><label for="edad">Edad: </label></td>
                        <td><input type="number" id="edad" name="edad" required placeholder="Escriba su edad" min="16"></td>
                    </tr>
                    <tr>
                        <td><label for="telefono">Teléfono: </label></td>
                        <td><input type="tel" id="telefono" name="telefono" required placeholder="Digite su teléfono"></td>
                    </tr>
                </table>
                <div class="botonera">
                    <input type="submit" value="Registrar">
                    <input type="reset" value="Limpiar">
                </div>
            </form>
            <table id="resultados">
                <thead>
                    <th>Nombre</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Edad</th>
                    <th>Teléfono</th>
                </thead>
                <tbody>
                <?php
                    // Poder ver los warnings, '0' <=> '1'
                    error_reporting(E_ALL);
                    ini_set('display_errors', '1');
                    // Incluir el archivo de conexión a la BD
                    include("conecta.php");
                    // Definir el juego de carácteres con el que se trabaja
                    $charset = "utf8";
                    mysqli_set_charset ($enlace , $charset );

                    if(isset($_POST['nombre'])) {
                        // Guardamos en varias variables los datos del formulario
                        $nombre = $_POST['nombre'];
                        $aPaterno = $_POST['apaterno'];
                        $aMaterno = $_POST['amaterno'];
                        $fechaNac = $_POST['fechaNac'];
                        $edad = $_POST['edad'];
                        $telefono = $_POST['telefono'];

                        // Formar la cadena de la consulta
                        $varQuery = "INSERT INTO aspirante(nombre, aPaterno,
                            aMaterno, fechaNac, edad, telefono) VALUES ('".$nombre."',
                            '".$aPaterno."', '".$aMaterno."', '".$fechaNac."',
                            '".$edad."', '".$telefono."');";
                        // Ejecutamos la consulta
                        mysqli_query($enlace, $varQuery);
                        // Evitar el reenvio del formulario
                        header('Location: 4EJE6_DBM.php');
                    }

                    // Actualizamos la tabla
                    $consulta = "SELECT * FROM aspirante ORDER BY id desc;";
                    if($resultado = mysqli_query($enlace, $consulta)) {
                        //var_dump($resultado);
                        /* obtener array asociativo */
                        while ($row = mysqli_fetch_assoc($resultado)) {
                            echo "<tr>";
                            echo "<td>".$row['nombre']." ".$row['aPaterno']." ".$row['aMaterno']."</td>";
                            echo "<td>".$row['fechaNac']."</td>";
                            echo "<td>".$row['edad']."</td>";
                            echo "<td>".$row['telefono']."</td>";
                            echo "</tr>";
                        }
                        /* liberar el conjunto de resultados */
                        mysqli_free_result($resultado);
                    }
                    /* cerrar la conexión */
                    mysqli_close($enlace);
                ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
