function fn_persona_nueva()
{   
     var str = $("#frmpersona").serialize();
     document.getElementById("mensaje").innerHTML='<div align=center><img src=../Resources/imagenes/preload.gif /></div>';
	 $.ajax({
		    	url: '../Controller/controller_persona.php',
			    data: str,
			    cache:true,
			    type: 'post',
			    success: function(data)
			     { 
				 $("#mensaje").html(data);
				 fn_limpiar_persona();
				 }
			      
		   });
}
function fn_limpiar_persona()
{
	$("#Apellidos").val('');$("#Nombres").val('');$("#Dni").val('');
	$("#Sexo").val('');$("#FechaNacimiento").val('');
	$("#Direccion").val('');$("#Telefono").val('');$("#Celular").val('');$("#Email").val('');
	$("#Apellidos").focus();
}

function fn_persona_buscar(){
    var rnd=Math.random()*11;
	
    document.getElementById("listado").innerHTML='<div align=center><img src="../Resources/imagenes/preload.gif"></div>';
    $.get('persona_buscar_resultado.php',{
        rnd:rnd,
        txtBuscar:$("#txtBuscar").val(),
    
        },
    function(data){
        $("#listado").html(data);
    });
 }
 
 function fn_persona_anular(IdPersona){
	mensaje=confirm("Estas Seguro de Desabilitar esta Persona","REGISTRO DE PERSONAS");
    if(mensaje){
	$.get('../Controller/controller_persona.php',{
        accion:"ANULAR_PERSONA",
		IdPersona:IdPersona
		},
    function(data){
		fn_persona_buscar();
		alert(data)
    });
	}
	else
	{ alert('La anulacion de la Persona ha sido cancelada');	}
 }
 
  
 function fn_persona_activar(IdPersona){
	mensaje=confirm("Estas Seguro de Activar esta Persona","REGISTRO DE PERSONAS");
    if(mensaje){
	 $.get('../Controller/controller_persona.php',{
        accion:"ACTIVAR_PERSONA",
		IdPersona:IdPersona
		},
    function(data){
		fn_persona_buscar();
		alert(data)
    });
	}
	else
	{ alert('La activacion de la Persona ha sido cancelada');	}
 }
 
  function fn_persona_editar(IdPersona){
	document.getElementById("formulario").innerHTML='<div align=center><img src="../Resources/imagenes/preload.gif"></div>';
    $.get('persona_editar.php',{
        IdPersona:IdPersona
		},
    function(data){
		  $("#formulario").html(data);
    });
 }
 
 function listar(pag){
    var rnd = Math.random();
       $.get("persona_buscar_resultado.php",{
        rnd : rnd,
        pagina:pag,
	txtBuscar:$("#txtBuscar").val()
    },
    function (data){
        $("#listado").html(data);
    });
}