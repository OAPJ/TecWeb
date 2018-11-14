<!DOCTYPE html>
<html>
<head>
	<title>Formularios pag 1</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Formularios - Continuacion</h1>

	<form>
		<select name="Carreras" id="idCarreras" size="3">
			<option value="ISC">Ingeniria en sistemas</option>
			<option value="MEC" selected>Ingeniria en Mecatronica</option>
			<option value="AMB" >Ingeniria en Ambiental</option>
			<option value="ALI">Ingeniria en Alimentos</option>
			<option value="MET">Ingeniria en Metalurgica</option>
		</select>
		
		<br>
		<br>
		<input type="date" name="dia" id="dia">
		
		<br>
		<br>
		<input type="radio" value="MAT" name="turno" checked>Matutino
		<input type="radio" value="VES" name="turno">Vespertino
		<input type="radio" value="NOC" name="turno">Nocturno

		<br>
		<br>
		<input type="radio" value="H" name="Sexo">Hombre
		<input type="radio" value="M" name="Sexo">Mujer

		<br>
		<br>
		Tus comentarios aquí
		<br>
		<textarea name="comentarios" rows="4" cols="30">
			
		</textarea>
		
		<br>
		<br>
		<input type="button" name="botton" onclick="alert('Hola JavaScript');" value="click Me!">
	</form>

</body>
</html>
