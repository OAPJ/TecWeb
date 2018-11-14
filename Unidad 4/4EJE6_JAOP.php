<?php

//$Link = mysqli_connect("localhost","root","","curso");
$Link = new mysqli("localhost", "upiiz_ovallej", "ovallej","upiiz_ovallej");

mysqli_query($Link, "Use upiiz_ovallej;");
//mysqli_query($Link, "drop table aspirante;");

$CrearTabla = "
    CREATE TABLE IF NOT EXISTS aspirante (
    id INT NOT NULL AUTO_INCREMENT,
    Nombre VARCHAR(45) NOT NULL,
    Paterno VARCHAR(45) NOT NULL,
    Materno VARCHAR(45) NOT NULL,
    Nacimiento DATE NOT NULL,
    Edad INT NOT NULL,
    Telefono CHAR(10),
        PRIMARY KEY(id));
    ";

mysqli_query($Link,$CrearTabla);

if(isset($_POST['Nombre']))
{
    $varNombre = $_POST['Nombre'];
    $varPaterno = $_POST['Paterno'];
    $varMaterno = $_POST['Materno'];
    $varNacimiento = $_POST['Nacimiento'];
    $varEdad = $_POST['Edad'];
    $varTelefono = $_POST['Telefono'];

    $QueryInsercion = "INSERT INTO aspirante (Nombre, Paterno, Materno, Nacimiento, Edad, Telefono) VALUES ('".$varNombre."', '".$varPaterno."', '".$varMaterno."', '".$varNacimiento."', '".$varEdad."', '".$varTelefono."')";

    mysqli_query($Link, $QueryInsercion);
    //var_dump($QueryInsercion);
    //header('Location: 4EJE6_JAOP.php');
}

$QueryConsulta = "SELECT * FROM aspirante ORDER BY id desc;";

$TodosLosRegistros = mysqli_query($Link, $QueryConsulta);

//header("Location:4EJE6_JAOP.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 6</title>
	<meta charset="utf-8">
	<script src=""></script>
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

	 <form action="" method="post">

        <h1>Pagina 1</h1>

            <table class="table">
                <tr>
                    <td>Nombre</td>
                    <td><input type="text" name="Nombre" placeholder="Escriba su nombre" id="Nombre"> </td>
                </tr>
                <tr>
                    <td>Apellido Paterno</td>
                    <td><input type="text" name="Paterno" placeholder="Escriba su apellido paterno" id="Paterno"></td>
                </tr>
                <tr>
                    <td>Apellido Materno</td>
                    <td><input type="text" name="Materno" placeholder="Escriba su apellido materno" id="Materno"></td>
                </tr>
                 <tr>
                    <td>Fecha de Nacimiento</td>
                    <td><input type="date" name="Nacimiento" placeholder="Escriba su nacimiento" id="Nacimiento"></td>
                </tr>
                 <tr>
                    <td>Telefono</td>
                    <td><input type="tel" name="Telefono" placeholder="Escriba su telefono" id="Telefono"></td>
                </tr>
                <tr>
                    <td>Edad</td>
                    <td><input type="number" name="Edad" placeholder="Escriba su edad" id="Edad"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="Registrar" class="boton"> </td>
                    <td><input type="reset" name="Limpiar" class="boton"> </td>
                </tr>
            </table>
        </form>

        
        <?php
        echo "</br>";
            echo "<table border='1' class='table'>";
            echo "<tr>";
                echo "<td> Nombre </td>";
                echo "<td> Edad</td>";
                echo "<td> Fecha Nacimiento</td>";
                echo "<td> Telefono</td>";
            echo "</tr>";

            while($UnSoloRegistro = mysqli_fetch_assoc($TodosLosRegistros)){

                echo "<tr>";
                    echo "<td>".$UnSoloRegistro['Nombre']." ".$UnSoloRegistro['Paterno']." ".$UnSoloRegistro['Materno']."</td>";
                    echo "<td>".$UnSoloRegistro['Edad']."</td>";
                    echo "<td>".$UnSoloRegistro['Nacimiento']."</td>";
                    echo "<td>".$UnSoloRegistro['Telefono']."</td>";
                echo "</tr>";
                
            }
            echo "</table>";
        ?>
</body>
</html>