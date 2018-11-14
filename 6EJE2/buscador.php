<?php
  $palabra = $_GET['palabra'];

  $Link = mysqli_connect("localhost","root","","curso");

  $QueryConsulta = "SELECT * FROM aspirante WHERE nombre like '%".$palabra."%'";
  $TodosLosRegistros = mysqli_query($Link, $QueryConsulta);

  echo "<table>"

    while($UnSoloRegistro=mysqli_fetch_assoc($TodosLosRegistros))
    {
      $nomCompleto = $UnSoloRegistro['Nombre']." ".$UnSoloRegistro['Materno']." ".$UnSoloRegistro['Materno'];
      $foto = $UnSoloRegistro['foto'];

      echo "<tr>";
        echo "<td><img src='".$foto."'></td>";
        echo "<td>".$nomCompleto."</td>";
      echo "</tr>";
    }
  echo "</table>";
 ?>
