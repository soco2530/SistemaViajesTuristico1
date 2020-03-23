function fn_reservacion_buscar(){
    var rnd=Math.random()*11;
	  $("#cargando").show();
      $.get('reservacion_resultado.php',{
      txtBuscar:$("#txtBuscar").val()
        },
    function(data){
        $("#listado").html(data);
		 $("#cargando").hide();
    });
 }
 
 function fn_reservacionturistico_nuevo()
{   
     var str = $("#frmreservacion_turistico").serialize();
     document.getElementById("mensaje").innerHTML='<div align=center><img src=../Resources/imagenes/preload.gif /></div>';
	 $.ajax({
		    	url: '../view/reservacion_operaciones.php',
			    data: str,
			    cache:true,
			    type: 'post',
			    success: function(data)
			     { 
				 $("#mensaje").html(data);
				  fn_limpiar_reservacionturistico();
				 }
			      
		   });
}

function fn_limpiar_reservacionturistico(){
	$("#FechaReservacion").val('');$("#HoraReservacion").val('');$("#Persona").val('');$("#Monto").val('');$("#LugarTuristico").val('');$("#FechaReservacion").focus();
}

 function fn_reservacionturistico_anular(IdReservacion){
	mensaje=confirm("Estas Seguro de Anular esta Reservacion turistico","REGISTRO DE RESERVACION TURISTICO");
    if(mensaje){
	$.get('../view/reservacion_operaciones.php',{
        accion:"DEL",
		IdReservacion:IdReservacion
		},
    function(data){
		fn_reservacion_buscar();
		alert(data)
    });
	}
	else
	{ alert('La anulacion de la Reservacion turistico ha sido cancelada');	}
 }