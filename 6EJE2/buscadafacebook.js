function buscar()
{
  var VarPalabra = $("#buscador").val();
  if(VarPalabra.leng >= 3)
  {
    $.ajax({
      url: "buscador.php",
      data:{palabra:VarPalabra},
      error:function(p1,p2,p3){
        alert(p3);
      },
      success:function(data,p2,p3){
        $("#muestraResultadoBusqueda").html(data);
      }
    });
  }
}
