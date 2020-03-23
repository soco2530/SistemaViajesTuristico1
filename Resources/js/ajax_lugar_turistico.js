function fn_lugarturismo_buscar(){
    //  var rnd=Math.random()*11;
      $("#cargando").show();
      $.get('lugar_turistico_resultado.php',{
      txtBuscar:$("#txtBuscar").val(),
      registro:$("#cboRegistro").val()
        },
    function(data){
        $("#listado").html(data);
		 $("#cargando").hide();
    });
 }
 
  function paginar(pag){
    var rnd = Math.random();
    $.get("lugar_turistico_resultado.php",{
        rnd : rnd,
        pagina:pag,
	txtBuscar:$("#txtBuscar").val(),
        registro:$("#cboRegistro").val()
    },
    function (data){
        $("#listado").html(data);
    });
}
function fn_lugarturistico_nuevo()
{   
     var str = $("#frmlugar_turistico").serialize();
     document.getElementById("mensaje").innerHTML='<div align=center><img src=../Resources/imagenes/preload.gif /></div>';
	 $.ajax({
		    	url: '../Controller/controller_lugar_turistico.php',
			    data: str,
			    cache:true,
			    type: 'post',
			    success: function(data)
			     { 
				 $("#mensaje").html(data);
				// fn_limpiar_persona();
				 }
			      
		   });
}

 function fn_lugarturistico_anular(IdLugarTuristico){
	mensaje=confirm("Estas Seguro de Desabilitar esta lugar turistico","REGISTRO DE LUGAR TURISTICO");
    if(mensaje){
	$.get('../Controller/controller_lugar_turistico.php',{
        accion:"ANULAR_LUGAR_TURISTICO",
		IdLugarTuristico:IdLugarTuristico
		},
    function(data){
		fn_lugarturismo_buscar();
		alert(data)
    });
	}
	else
	{ alert('La anulacion del lugar turistico ha sido cancelada');	}
 }
 
 
  function fn_lugarturistico_activar(IdLugarTuristico){
	mensaje=confirm("Estas Seguro de activar esta lugar turistico","REGISTRO DE LUGAR TURISTICO");
    if(mensaje){
	$.get('../Controller/controller_lugar_turistico.php',{
        accion:"ACTIVAR_LUGAR_TURISTICO",
		IdLugarTuristico:IdLugarTuristico
		},
    function(data){
		fn_lugarturismo_buscar();
		alert(data)
    });
	}
	else
	{ alert('La activacion del lugar turistico ha sido cancelada');	}
 }