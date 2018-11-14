function funSuma()
{
	//Declaracion
	var num, numD, res;

	//Referencia
	num=document.getElementById("numUno").value;
	numD=document.getElementById("numDos").value;
	
	//Operacion
	res= parseInt(num) + parseInt(numD);

	//Ponerlo en la caja de texto
	document.getElementById("Resultado").value=res;
}

function funResta()
{
	var num, numD, res;

	num=document.getElementById("numUno").value;
	numD=document.getElementById("numDos").value;

	//Operacion
	res= parseInt(num) - parseInt(numD);

	//Ponerlo en la caja de texto
	document.getElementById("Resultado").value=res;
}

function funMuti()
{
	var num, numD, res;

	num=document.getElementById("numUno").value;
	numD=document.getElementById("numDos").value;

	//Operacion
	res= parseInt(num) * parseInt(numD);

	//Ponerlo en la caja de texto
	document.getElementById("Resultado").value=res;
}

function funDiv()
{
	var num, numD, res;

	num=document.getElementById("numUno").value;
	numD=document.getElementById("numDos").value;

	//Operacion
	res= parseInt(num) / parseInt(numD);

	//Ponerlo en la caja de texto
	document.getElementById("Resultado").value=res;
}
function funPot()
{
	var num, numD, res;

	num=document.getElementById("numUno").value;
	numD=document.getElementById("numDos").value;

	//Operacion
	res= Math.pow(parseInt(num), parseInt(numD));

	//Ponerlo en la caja de texto
	document.getElementById("Resultado").value=res;
}