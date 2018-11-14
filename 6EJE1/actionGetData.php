<?php
    $varGetData = $_GET['idGetData'];

    $Link = mysqli_connect("localhost","root","", "curso");

  	$QuaryConsulta = "SELECT * FROM pago WHERE id=".$varGetData;

  	$TodosLosRegistros = mysqli_query($Link, $QuaryConsulta);

    if(mysqli_num_rows($TodosLosRegistros)>0)
    {

      $UnSoloRegistro = mysqli_fetch_array($TodosLosRegistros);

      $id=$UnSoloRegistro['id'];
      $cant=$UnSoloRegistro['cantidad'];
      $doc=$UnSoloRegistro['documento'];

      $arrJSON = array('id' => $id, 'cantidad' => $cant, 'documento' => $doc,);
      echo json_encode($arrJSON);
    }
    else {
      echo "Ocurrio un error desconocido";
    }


 ?>
