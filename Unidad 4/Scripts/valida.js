function validar() {
    var nombre = document.getElementById('nombre');
    var apaterno = document.getElementById('apaterno');
    var amaterno = document.getElementById('amaterno');

    // Restablecemos el color del borde de los inputs
    nombre.style.borderColor = "#e8e8e8";
    apaterno.style.borderColor = "#e8e8e8";
    amaterno.style.borderColor = "#e8e8e8";

    if(!validarNombre(nombre)) return false;
    if(!validarInicio(apaterno)) return false;
    if(!validarInicio(amaterno)) return false;
    return true;
}

function validarNombre(nombre) {
    var ans = true;
    if(nombre.value.length < 3) {
        nombre.style.borderColor = "red";
        document.getElementById('alerta').innerHTML = "El nombre debe tener una longitud mínima de 3 carácteres.";
        ans = false;
    }
    return ans;
}

function validarInicio(entrada) {
    var ans = true;
    if(entrada.value.charAt(0) == ' ' || entrada.value.charAt(entrada.value.length - 1) == ' ') {
        entrada.style.borderColor = "red";
        document.getElementById('alerta').innerHTML = "No se permiten espacios en blanco al inicio o final del campo";
        ans = false;
    }
    if(entrada.value.charCodeAt(0) > 47 && entrada.value.charCodeAt(0) < 59) {
        entrada.style.borderColor = "red";
        document.getElementById('alerta').innerHTML = "El campo no puede iniciar con un número";
        ans = false;
    }
    return ans;
}