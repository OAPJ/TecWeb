function validaFormulario() {
	//por default no se envia
	var varEnviar = false;
	var varNombre = document.getElementById('Nombre');
	var varError = document.getElementById('Error');
	alert(varNombre.value);

	if(varNombre.value!='')
		varEnviar=true;
	else
	{
		varError.innerHTML='¡Hay Error!';
		alert("El nombre de la materia no debe de estar vacio");
		varNombre.focus(); //Dar foco a la caja de texto 
	}
	return varEnviar;


}