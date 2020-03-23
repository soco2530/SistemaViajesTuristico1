function fn_usuario_nuevo()
{    
     var str = $("#frmusuario").serialize();
    
	 document.getElementById("mensaje").innerHTML='<div align=center><img src=../Resources/imagenes/preload.gif /></div>';
	 $.ajax({
		    	url: '../Controller/controller_usuario.php',
			    data: str,
			    cache:true,
			    type: 'post',
			    success: function(data)
			     { 
				 $("#mensaje").html(data);
				
				 }
			      
		   });
}

function fn_limpiar_usuario()
{
	$("#Persona").val('');$("#Usuario").val('');$("#Clave").val('');
	$("#TipoUsuario").val('');$("#Persona").focus();
}

function fn_usuario_buscar(){
    var rnd=Math.random()*11;
	
    document.getElementById("listado").innerHTML='<div align=center><img src="../Resources/imagenes/preload.gif"></div>';
    $.get('usuario_buscar_resultado.php',{
        rnd:rnd,
		txtBuscar:$("#txtBuscar").val()
        },
    function(data){
        $("#listado").html(data);
    });
 }
 
  function fn_usuario_anular(IdUsuario){
	mensaje=confirm("Estas Seguro de Desabilitar esta Usuario","REGISTRO DE USUARIOS");
    if(mensaje){
		$.get('../Controller/controller_usuario.php',{
			accion:"ANULAR_USUARIO",
			Persona:IdUsuario
			},
		function(data){
			fn_usuario_buscar();
			alert(data)
		});
	}
	else
	{ alert('La anulacion de usuario ha sido cancelada');	}
 }
 
   function fn_usuario_activar(IdUsuario){
	mensaje=confirm("Estas Seguro de Activar esta Usuario","REGISTRO DE USUARIOS");
    if(mensaje){
		$.get('../Controller/controller_usuario.php',{
			accion:"ACTIVAR_USUARIO",
			Persona:IdUsuario
			},
		function(data){
			fn_usuario_buscar();
			alert(data)
		});
   }
   else
	{ alert('La Activacion de usuario ha sido cancelada');	}
 }
 
   function fn_usuario_cambiarclave(IdUsuario){
	var Clave=window.prompt('Ingrese la nueva clave','123456');
	if(Clave)
	{
	mensaje=confirm("Estas Seguro de cambiar la Clave de Usuario","REGISTRO DE USUARIOS");
    if(mensaje){
		$.get('../Controller/controller_usuario.php',{
			accion:"CAMBIAR_CLAVE",
			Persona:IdUsuario,
			Clave:Clave
			},
		function(data){
			alert(data)
		});
   }
   else
	{ alert('La Activacion de usuario ha sido cancelada');	}
	}
 }
  