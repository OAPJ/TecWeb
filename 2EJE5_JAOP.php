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
				<form>
				 <table width="100%">
				 	<tr>
				 		<td width="30%" align="RIGHT">Acomodation</td>
				 		<td width="70%">
				 			<form>
				 				<select name="Acomodation" id="Acomodation">
				 					<option value="RV">RV</option>
				 					<option value="RA">RA</option>
				 					<option value="RE">RE</option>
				 					<option value="RO">RO</option>
				 				</select>
				 			</form>
				 		</td>
				 	</tr>
				 	
				 	<tr>
				 		<td width="30%" align="RIGHT">Name</td>
				 		<td width="70%">
				 			<form>
				 				<select name="Name" id="Name">
				 					<option value="Mr">Mr</option>
				 					<option value="Mrs">Mrs</option>
				 				</select>
				 				<input type="text" name="FirstName" id="FirstName" placeholder="FirstName">
				 				<input type="text" name="LastName" id="LastName" placeholder="LastName">
				 			</form>
				 		</td>
				 	</tr>

				 	<tr>
				 		<td width="30%" align="RIGHT">Guest</td>
				 		<td width="70%">
				 			<form>
				 				<input type="number" name="Guest" id="Guest" placeholder="18+ years">
				 				<input type="number" name="Guest2" id="Guest2" placeholder="2-17 years">
				 				<input type="number" name="Guest3" id="Guest3" placeholder="<2 years">
				 			</form>
				 		</td>
				 	</tr>

				 	<tr>
				 		<td width="30%" align="RIGHT">Contact</td>
				 		<td width="70%">
				 			<form>
				 				<input type="email" name="email" id="email" placeholder="E-mail">
				 			</form>
				 		</td>
				 	</tr>

				 	<tr>
				 		<td width="30%"></td>
				 		<td width="70%">
				 			<form>
				 				<input type="tel" name="tel" id="tel" placeholder="Phone">
				 			</form>
				 		</td>
				 	</tr>

				 	<tr>
				 		<td width="30%" align="RIGHT">Checkin</td>
				 		<td width="30%">
				 			<form>
				 				<input type="date" name="Checkin" id="Checkin">&nbsp;&nbsp;&nbsp;Checkout
				 				<input type="date" name="Checkout" id="Checkout">
				 			</form>
				 		</td>
				 	</tr>

				 	<tr>
				 		<td width="30%" align="RIGHT">Equipment type</td>
				 		<td>
				 			<form>
				 				<select name="Equipment" id="Equipment">
				 					<option value="Tt">Travel trailer</option>
				 					<option value="Mo">Mochila</option>
				 					<option value="Co">Comida</option>
				 					<option value="Be">Bebidas</option>
				 				</select>
				 				&nbsp;&nbsp;&nbsp;Slide-outs
				 				<input type="radio" name="desicion" value="S">Si
				 				<input type="radio" name="desicion" value="N">No
				 			</form>
				 		</td>
				 	</tr>

				 	<tr>
				 		<td width="30%" align="RIGHT">Requiered Service</td>
				 		<td>
				 			<form>
				 				<select name="Service" id="Service" size="3">
				 					<option value="Hi">Hidro</option>
				 					<option value="Wa">Water</option>
				 					<option value="Se">Sewer</option>
				 					<option value="Li">Light</option>
				 					<option value="Ga">Gas</option>
				 				</select>
				 			</form>
				 		</td>
				 	</tr>

				 	<tr>
				 		<td width="30%" align="RIGHT">Pets</td>
				 		<td>
				 			<form>
				 				&nbsp;
				 				<input type="radio" name="option" value="S2">Si
				 				<input type="radio" name="option" value="S2">No
				 			</form>
				 		</td>
				 	</tr>

				 	<tr>
				 		<td width="30%" align="RIGHT">Comments</td>
				 		<td>
				 			<form>
				 				<textarea name="Comments" rows="3" cols="50" placeholder="Additional Comments"></textarea>
				 			</form>
				 		</td>
				 	</tr>

				 	<tr>
				 		<td width="30%"></td>
				 		<td>
				 			<form>
				 				<input type="submit" name="enviar" id="enviar" value="Reservar">
				 				<input type="reset" name="borrar" id="borrar" value="Restablecer">
				 			</form>
				 		</td>
				 	</tr>
				 </table>
				 </form>
			</td>
		</tr>
	</table>
	
</body>
</html>