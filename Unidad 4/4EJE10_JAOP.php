<?php

	$VarValorCajaHorario ="";
	$VarValorBoton = "Guardar";
	$varIdEditar=0;

//$Link = mysqli_connect("localhost","root","", "curso");

$Link = new mysqli("localhost","upiiz_ovallej","ovallej","upiiz_ovallej");

mysqli_query($Link, "Use upiiz_ovallej;");

$CrearTabla = " 
	CREATE TABLE IF NOT EXISTS horario (
	id INT NOT NULL AUTO_INCREMENT,
		Horario VARCHAR(45) NOT NULL,
		PRIMARY KEY(id));
	";

mysqli_query($Link, $CrearTabla);

//Actualizar
if(isset($_POST['IdEditar']) && $_POST['IdEditar']>0 && isset($_POST['Horario']))
{
	$QuaryActualizar="UPDATE horario SET Horario='".$_POST['Horario']."' WHERE id = ".$_POST['IdEditar'];

	mysqli_query($Link, $QuaryActualizar);
	//Evitar el reenvio del formulario
	header("Location:4EJE10_JAOP.php");
}
//Agregar
elseif(isset($_POST['Horario']))
{
	$varNombre = $_POST['Horario'];

	$QuaryInsercion = "INSERT INTO `horario` (`id`,`Horario`) VALUES (NULL, '".$varNombre."')";

	mysqli_query($Link, $QuaryInsercion);
	//Evitar el reenvio del formulario
	header("Location:4EJE10_JAOP.php");
}
//Eliminar
if(isset($_GET['id']) && isset($_GET['accion']))
{
	if($_GET['accion']=='eliminar')
	{
		$QuaryEliminar = "DELETE FROM `horario` WHERE `horario`.`id`=".$_GET['id'];
		mysqli_query($Link, $QuaryEliminar);
	}
	elseif ($_GET['accion']='editar') {

		//$VarValorCajaMateria="Matematicas";
		$VarValorBoton = "Actualizar";

		$QuaryHorario = "SELECT Horario FROM `horario` WHERE `horario`.`id`=".$_GET['id'];

		$UnHorario = mysqli_query($Link, $QuaryHorario);

		$UnSoloRegistro=mysqli_fetch_assoc($UnHorario);

		$VarValorCajaHorario=$UnSoloRegistro['Horario'];

		$varIdEditar=$_GET['id'];

	}
}

$QuaryConsulta = "SELECT * FROM horario";
$TodosLosRegistros = mysqli_query($Link, $QuaryConsulta);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 10</title>
	<meta charset="utf-8">
	<script src="Scripts/valida2.js"></script>
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
	<form method="post" action="" onsubmit="return validaFormulario();">

		<input type="hidden" name="IdEditar" id="IdEditar" value="<?php echo $varIdEditar;?>">
		<h1>Edificio</h1>
		<table  align="center" class="table" >
			<tr>
				<td width="30%">Horario :</td>
				<td align="LEFT" >
					<input type="text" name="Horario" placeholder="Digite nombre horario" id="Horario" value=" <?php echo $VarValorCajaHorario;?>">
				</td>
			</tr>

			<tr>
				<td align="RIGHT">
					<input type="submit" name="Registrar" class="boton" value="<?php echo $VarValorBoton?>">
				</td>
				<td align="LEFT">
					<input type="reset" name="Limpiar" class="boton">
				</td>
			</tr>
		</table>
	</form>

	<?php
    echo "<br />";
    echo "<p id='Error'></p>";
        echo "<table border='1' align='center' class='table'>";
        echo "<tr>";
        echo "<td> Horario </td>";
        echo "<td> Acciones</td>";
        echo "</tr>";
        
        while($UnSoloRegistro = mysqli_fetch_assoc($TodosLosRegistros)){
        	
        	$id = $UnSoloRegistro['id'];
        	$Ncomplejo = $UnSoloRegistro['Horario'];

        	//? inisicamos los parametros
        	//& Separamaos los parametros

        	echo "<tr>";
                echo "<td>".$Ncomplejo."</td>";
                
                $E="<a href='4EJE10_JAOP.php?id=".$id."&accion=eliminar'>X</a>";
                $A="<a href='4EJE10_JAOP.php?id=".$id."&accion=editar'>A</a>";
                
                echo "<td>[".$E." | ".$A."]</td>";
            echo "</tr>";
            
        }
        echo "</table>";
    ?>
	
</body>
</html>