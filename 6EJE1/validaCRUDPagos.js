function Guardar()
{
	//1. Referencia nuestrso campos
	var varCantidad= $("#Cantidad").val();
	var varDocumento = $("#Documento").val();

	//2. Validar


	//3. Mandar los datos al servidor usando AJAX con JQuery
	$.ajax({
		url:"procesaPago.php",
		data: {Cantidad: varCantidad, Documento: varDocumento},
		error: function(p1,p2,p3)
		{
			alert(p3);
		},
		success: function(respuesta, estado, jqxhr)
		{
			actionRead();
		}
	});

}

//recuperar los regisros
function actionRead()
{
	$.ajax({
		url: "actionReadPagos.php",
		error:function(p1,p2,p3)
		{
			alert(p3);
		},
		success:function(d,p2,p3)
		{
			$('#Read').html(d);
		}
	});
}

function actionDelete(id)
{
	$.ajax({
			url:"actioneliminar.php",
			data:{idEliminar:id},
			error:function(p1,p2,p3)
			{
				alert(p3);
			},
			success:function(re,p2,p3)
			{
				actionRead();
				alert(re);
			}

	});
}

function getData(id)
{
	$.ajax({
			url:"actionGetData.php",
			data:{idGetData:id},
			error:function(p1,p2,p3)
			{
				alert(p3);
			},
			success:function(data,p2,p3)
			{
				var objJSON = JSON.parse(data);

				if(objJSON.id>0)
				{
					$("#Cantidad").val(objJSON.cantidad);
					$("#Documento").val(objJSON.documento);
				}
				else
				{
						alert("Ocurrio un error desconocido");
				}

			}
	});
}
