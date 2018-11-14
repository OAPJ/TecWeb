function Limpiar()
{
	document.getElementById("Numero").value="0";
}

function Uno()
{
	var num;
	num=document.getElementById("Numero").value;
	num= num+1;
	document.getElementById("Numero").value=num;
}

function Dos()
{
	var num;
	num=document.getElementById("Numero").value;
	num= num+2;
	document.getElementById("Numero").value=num;
}

function Tres()
{
	var num;
	num=document.getElementById("Numero").value;
	num= num+3;
	document.getElementById("Numero").value=num;
}

function Cuatro()
{
	var num;
	num=document.getElementById("Numero").value;
	num= num+4;
	document.getElementById("Numero").value=num;
}

function Cinco()
{
	var num;
	num=document.getElementById("Numero").value;
	num= num+5;
	document.getElementById("Numero").value=num;
}

function Seis()
{
	var num;
	num=document.getElementById("Numero").value;
	num= num+6;
	document.getElementById("Numero").value=num;
}

function Siete()
{
	var num;
	num=document.getElementById("Numero").value;
	num= num+7;
	document.getElementById("Numero").value=num;
}

function Ocho()
{
	var num;
	num=document.getElementById("Numero").value;
	num= num+8;
	document.getElementById("Numero").value=num;
}

function Nueve()
{
	var num;
	num=document.getElementById("Numero").value;
	num= num+9;
	document.getElementById("Numero").value=num;
}

function Cero()
{
	var num;
	num=document.getElementById("Numero").value;
	num= num+0;
	document.getElementById("Numero").value=num;
}

function Sumar()
{
	var num;
	num=document.getElementById("Numero").value;
	num= num + "+";
	document.getElementById("Numero").value=num;
}

function Res()
{
	var num;
	num=document.getElementById("Numero").value;
	num= num + "-";
	document.getElementById("Numero").value=num;
}

function Mul()
{
	var num;
	num=document.getElementById("Numero").value;
	num= num + "*";
	document.getElementById("Numero").value=num;
}

function Div()
{
	var num;
	num=document.getElementById("Numero").value;
	num= num+ "/";
	document.getElementById("Numero").value=num;
}

function Pot()
{
	var num, p;
	num=document.getElementById("Numero").value;
	p= prompt("Potencia:","1");
	num=Math.pow(num,p);
	document.getElementById("Numero").value=num;
}

function Fac()
{
	var num, le=1;
	num=document.getElementById("Numero").value;
	for (var i = 1; i <=parseInt(num); i++) {
		le=i*le;
	}
	num=le;
	document.getElementById("Numero").value=num;
}

function Sen()
{
	var num;
	num=document.getElementById("Numero").value;
	num=Math.sin(num);
	document.getElementById("Numero").value=num;
}

function Cos()
{
	var num;
	num=document.getElementById("Numero").value;
	num= Math.cos(num);
	document.getElementById("Numero").value=num;
}

function Igual()
{
	var num;
	num=document.getElementById("Numero").value;
	num= eval(num);
	document.getElementById("Numero").value=num;
}