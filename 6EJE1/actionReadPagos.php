<?php

	$Link = mysqli_connect("localhost","root","", "curso");

	$QuaryConsulta = "SELECT * FROM pago";
	$TodosLosRegistros = mysqli_query($Link, $QuaryConsulta);


        while($UnSoloRegistro = mysqli_fetch_assoc($TodosLosRegistros)){

        	$id = $UnSoloRegistro['id'];
        	$Ncomplejo = $UnSoloRegistro['cantidad'];
        	$Ndocu = $UnSoloRegistro['documento'];

        	//? inisicamos los parametros
        	//& Separamaos los parametros

					$id = $UnSoloRegistro["id"];
        	echo "<tr>";
                echo "<td>".$Ncomplejo."</td>";
                echo "<td>".$Ndocu."</td>";

                $E="<a href='javascript:void(0);' onclick='actionDelete(".$id.");'> X </a>";
                $A="<a href='javascript:void(0);' onclick='getData(".$id.");'> A </a>";

                echo "<td>[".$E." | ".$A."]</td>";
            echo "</tr>";

        }

?>
