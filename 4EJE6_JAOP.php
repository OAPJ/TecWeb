<?php

$Link = mysql_connect("localhost","root","");

mysql_select_sb("curso");


$QueryConsulta = "SELECT * FROM aspirante";

$TodosLosRegistros = mysql_query($QueryConsulta);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 6</title>
	<meta charset="utf-8">
	<script src="Scripts/valida.js"></script>
</head>
<body>

	 <form action="" method="post">
            <table>
                <tr>
                    <td>Nombre</td>
                    <td><input type="text" name="nombre" placeholder="Escriba su nombre" id="nombre"> </td>
                </tr>
                <tr>
                    <td>Apellido Paterno</td>
                    <td><input type="text" name="aPaterno" placeholder="Escriba su apellido paterno" id="aPaterno"></td>
                </tr>
                <tr>
                    <td>Apellido Materno</td>
                    <td><input type="text" name="aMaterno" placeholder="Escriba su apellido materno" id="aMaterno"></td>
                </tr>
                 <tr>
                    <td>Fecha de Nacimiento</td>
                    <td><input type="date" name="Nac" placeholder="Escriba su apellido materno" id="Nac"></td>
                </tr>
                 <tr>
                    <td>Telefono</td>
                    <td><input type="tel" name="Tel" placeholder="Escriba su apellido materno" id="Tel"></td>
                </tr>
                <tr>
                    <td>Edad</td>
                    <td><input type="number" name="Edad" placeholder="Escriba su apellido materno" id="Edad"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="Registrar"> </td>
                    <td><input type="reset" name="Limpiar"> </td>
                </tr>
            </table>
        </form>

        
        <?php
        echo "</br>";
            echo "<table>";
            echo "<tr>";
            echo "<td> Nomkbre </td>";
            echo "<td> Edad</td>";
            echo "<td> Fecha Nacimiento</td>";
            echo "<td> Telefono</td>";
            echo "</tr>";
            while($UnSoloRegistrp = mysql_fetch_array($TodosLosRegistros)){
                echo "<tr>";
                echo "<td>".$UnSoloRegistro['Nombre']." ".$UnSoloRegistro['aPaterno']." ".$UnSoloRegistro['aMaterno']."</td>";
                echo "<td>".$UnSoloRegistro['Edad']."</td>";
                  echo "<td>".$UnSoloRegistro['Nac']."</td>";
                  echo "<td>".$UnSoloRegistro['Tel']."</td>";
                
            }
            echo "</table>";
        ?>
</body>
</html>