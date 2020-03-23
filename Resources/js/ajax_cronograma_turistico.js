function fn_cronogramaturismo_buscar(){
    var rnd=Math.random()*11;
	  $("#cargando").show();
      $.get('cronograma_turistico_resultado.php',{
      txtBuscar:$("#txtBuscar").val()
        },
    function(data){
        $("#listado").html(data);
		 $("#cargando").hide();
    });
 }
 
 function fn_cronogramaturistico_nuevo()
{   
     var str = $("#frmcronograma_turistico").serialize();
     document.getElementById("mensaje").innerHTML='<div align=center><img src=../Resources/imagenes/preload.gif /></div>';
	 $.ajax({
		    	url: '../Controller/controller_cronograma_turistico.php',
			    data: str,
			    cache:true,
			    type: 'post',
			    success: function(data)
			     { 
				 $("#mensaje").html(data);
				fn_limpiar_cronogramaturistico();
				 }
			      
		   });
}

function fn_limpiar_cronogramaturistico()
{	$("#LugarTuristico").val('');$("#DiaSemana").val('');$("#HoraSalida").val('');$("#HoraLlegada").val('');$("#LugarTuristico").focus(); $("#Precio").val('');}

 function fn_cronogramaturistico_anular(IdCronogramaTuristico){
	mensaje=confirm("Estas Seguro de Desabilitar esta cronograma turistico","REGISTRO DE CRONOGRAMAS TURISTICO");
    if(mensaje){
	$.get('../Controller/controller_cronograma_turistico.php',{
        accion:"ANULAR_CRONOGRAMA_TURISTICO",
		IdCronogramaTuristico:IdCronogramaTuristico
		},
    function(data){
		fn_cronogramaturismo_buscar();
		alert(data)
    });
	}
	else
	{ alert('La anulacion del cronograma turistico ha sido cancelada');	}
 }
 
  function fn_cronogramaturistico_activar(IdCronogramaTuristico){
	mensaje=confirm("Estas Seguro de habilitar esta cronograma turistico","REGISTRO DE CRONOGRAMAS TURISTICO");
    if(mensaje){
	$.get('../Controller/controller_cronograma_turistico.php',{
        accion:"ACTIVAR_CRONOGRAMA_TURISTICO",
		IdCronogramaTuristico:IdCronogramaTuristico
		},
    function(data){
		fn_cronogramaturismo_buscar();
		alert(data)
    });
	}
	else
	{ alert('La activacion del cronograma turistico ha sido cancelada');	}
 }
 
 