<!DOCTYPE html>
<html>
<head>
	<title>2EJE5</title>
</head>
<body>
	<table align="center" width="70%" bordercolor="8D2A62">
		<tr bgcolor="8D2A62" style="color: white">
			<td width="100%">Almaguin Campground - Resevation</td>
		</tr>

		<tr>
			<td>
				<form action="2EJE5_JAOP.html">
				 <table width="100%">
				 	<tr>
				 		<td width="30%" align="RIGHT">Acomodation</td>
				 		<td width="70%">
				 				<?php
				 					echo $_GET['Acomodation'];
				 				?>
				 		</td>
				 	</tr>
				 	
				 	<tr>
				 		<td width="30%" align="RIGHT" bgcolor="whiteSmoke"E8E9E8 style="color: #000000">Name</td>
				 		<td width="70%">
				 				
				 			<?php 
				 				echo $_GET['Name']." ".$_GET['FirstName']." ".$_GET['LastName'];
				 			?>

				 		</td>
				 	</tr>

				 	<tr>
				 		<td width="30%" align="RIGHT">Guest</td>
				 		<td width="70%">

				 			<?php
				 				echo "Mayor de 18: ".$_GET['Guest']." Entre 2 y 17: ".$_GET['Guest2']." Menor que 2: ".$_GET['Guest3'];
				 			?>
				 		</td>
				 	</tr>

				 	<tr>
				 		<td width="30%" align="RIGHT">Contact</td>
				 		<td width="70%">
			 				<?php
			 					echo $_GET['email'];
			 				?>
				 		</td>
				 	</tr>

				 	<tr>
				 		<td width="30%"></td>
				 		<td width="70%">
			 				<?php
			 					echo $_GET['tel'];
			 				?>
				 		</td>
				 	</tr>

				 	<tr>
				 		<td width="30%" align="RIGHT">Checkin</td>
				 		<td width="30%">
				 			<?php
			 					echo $_GET['Checkin']."    Checkout  ".$_GET['Checkout'];
			 				?>
				 		</td>
				 	</tr>

				 	<tr>
				 		<td width="30%" align="RIGHT">Equipment type</td>
				 		<td>

				 			<?php
			 					echo $_GET['Equipment']."    Slide-outs:  ".$_GET['desicion'];
			 				?>
				 		</td>
				 	</tr>

				 	<tr>
				 		<td width="30%" align="RIGHT">Requiered Service</td>
				 		<td>
				 			<?php
			 					echo $_GET['Service'];
			 				?>
				 		</td>
				 	</tr>

				 	<tr>
				 		<td width="30%" align="RIGHT">Pets</td>
				 		<td>
				 			<?php
			 					echo $_GET['option'];
			 				?>
				 		</td>
				 	</tr>

				 	<tr>
				 		<td width="30%" align="RIGHT">Comments</td>
				 		<td>
				 			<?php
			 					echo $_GET['Comments'];
			 				?>
				 		</td>
				 	</tr>

				 	<tr>
				 		<td width="30%"></td>
				 		<td>
				 				<input type="submit" name="enviar" id="enviar" value="Otra reservar">
				 			
				 		</td>
				 	</tr>
				 </table>
				 </form>
			</td>
		</tr>
	</table>
</body>
</html>