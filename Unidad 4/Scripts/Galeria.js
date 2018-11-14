

function Primera()
{
	clearInterval(m);
	var ima;
	ima=document.getElementById("Imagen");
	ima.src="Imagenes/Im1.jpg";
}

function Anterior()
{
	clearInterval(m);
	var ima = ["Imagenes/Im1.jpg", "Imagenes/Im2.jpg", "Imagenes/Im3.jpg", "Imagenes/Im4.jpg", "Imagenes/Im5.jpg"];
	var ima2, aux;

	ima2=document.getElementById("Imagen");
	var ruta=ima2.src;

	for (var i = 0; i < 5; i++) {
		if(ruta.includes(ima[i]))
		{
			aux=i;
			break;
		}
	}

	if (aux==0) {
		ima2.src="Imagenes/Im5.jpg";
	}
	else if (aux==1) {
		ima2.src="Imagenes/Im1.jpg";
	}
	else if (aux==2) {
		ima2.src="Imagenes/Im2.jpg";
	} 
	else if (aux==3) {
		ima2.src="Imagenes/Im3.jpg";
	}
	else if (aux==4) {
		ima2.src="Imagenes/Im4.jpg";
	}

}

function Siguiente()
{
	clearInterval(m);
	var ima = ["Imagenes/Im1.jpg", "Imagenes/Im2.jpg", "Imagenes/Im3.jpg", "Imagenes/Im4.jpg", "Imagenes/Im5.jpg"];
	var ima2, aux;

	ima2=document.getElementById("Imagen");
	var ruta=ima2.src;

	for (var i = 0; i < 5; i++) {
		if(ruta.includes(ima[i]))
		{
			aux=i;
			break;
		}
	}

	if (aux==0) {
		ima2.src="Imagenes/Im2.jpg";
	}
	else if (aux==1) {
		ima2.src="Imagenes/Im3.jpg";
	}
	else if (aux==2) {
		ima2.src="Imagenes/Im4.jpg";
	} 
	else if (aux==3) {
		ima2.src="Imagenes/Im5.jpg";
	}
	else if (aux==4) {
		ima2.src="Imagenes/Im1.jpg";
	}
}

function Ultima()
{
	clearInterval(m);
	var ima;
	ima=document.getElementById("Imagen");
	ima.src="Imagenes/Im5.jpg";
}

var i=0;
function Tiempo()
{

	var ima2=document.getElementById("Imagen");
	if (i==0) {
		ima2.src="Imagenes/Im1.jpg";
	}
	else if (i==1) {
		ima2.src="Imagenes/Im2.jpg";
	}
	else if (i==2) {
		ima2.src="Imagenes/Im3.jpg";
	} 
	else if (i==3) {
		ima2.src="Imagenes/Im4.jpg";
	}
	else if (i==4) {
		ima2.src="Imagenes/Im5.jpg";
		i=-1;
	}


	i=i+1;

}

var m;
function Tiempo2()
{
	m = setInterval(Tiempo, 3000); 
}