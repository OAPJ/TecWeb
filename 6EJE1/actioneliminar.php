<?php
    $varElimiar = $_GET['idEliminar'];

    $Link = mysqli_connect("localhost","root","", "curso");

  	$QuaryConsulta = "DELETE  FROM pago WHERE id=".$varElimiar;

  	$TodosLosRegistros = mysqli_query($Link, $QuaryConsulta);

    if(mysqli_affected_rows($Link)>0)
    {
      echo "El registro se elimino";
    }
    else {
      echo "Ocurrio un error desconocido";
    }


 ?>
