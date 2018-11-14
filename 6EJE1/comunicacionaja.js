function enviarDatoAlServidor()
{
	var varDato = $("#dato").val();
	
	$.ajax({
		url: "respuestaAJAX.php",

		data:{dato:varDato},

		error:function(p1,p2,p3)
		{
			alert(p1+' '+p2+' '+p3);
		},

		success:function(datos,estatus,jqu)
		{
			alert(datos);
		}
	});
	
	//alert("Despues de usar JQUERY");
}