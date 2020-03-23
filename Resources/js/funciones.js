function iniciar_sesion()
  {
   var Usuario=$("#txtUsuario").val(); 
   var Clave=$("#txtClave").val();
    var divMensaje=$("#mensajelogin");
 
    if (Usuario.length==0 || Clave.length==0)
	  {divMensaje.html('Ingrese su Usuario y contrese�a');return;}
                                	
    $("#mensajelogin").html('Verificando... <img src=Resources/imagenes/preload.gif  align=absmiddle />');
	 $.post("Controller/controller_usuario.php",
		  { accion:"INICIAR_SESSION",
                      Usuario:Usuario,
		   Clave:Clave
		  },
    function(data)
    {$("#mensajelogin").html(data);});
}

function iniciar_sesion_registrarse()
  {
   var Usuario=$("#txtUsuario").val(); 
   var Clave=$("#txtClave").val();
                         	
    $("#mensaje").html('<strong> conectandose...</strong><img src=Resources/imagenes/preload.gif  align=absmiddle />');
	 $.post("Controller/controller_usuario.php",
		  { accion:"INICIAR_SESSION",
                   Usuario:Usuario,
		   Clave:Clave
		  },
    function(data)
    {$("#mensaje").html(data);});
}


function navegador(url){
     document.getElementById("information").innerHTML='<div align=center><img src="Resources/imagenes/preload.gif"></div>';
    $.get(url,{
            },
    function(data){
        $("#information").html(data);
    });
}

function subnavegador(url){
    var rnd=Math.random()*11;
   // document.getElementById("context_formulario").innerHTML='<div align=center><img src="../Resources/imagenes/preload.gif"></div>';
    $.get(url,{
        rnd:rnd
        },
    function(data){
        $("#context_formulario").html(data);
    });
}
function subnavegador_menu(url){
    var rnd=Math.random()*11;
    document.getElementById("formulario").innerHTML='<div align=center><img src="../Resources/imagenes/preload.gif"></div>';
    $.get(url,{
        rnd:rnd
        },
    function(data){
        $("#formulario").html(data);
    });
}

function nuevo_usuario(){
	var Nombres=document.frmusuario.txtNombres;
	var Apellidos=document.frmusuario.txtApellidos;
	var Sexo=document.frmusuario.cboSexo;
	var Email=document.frmusuario.txtEmail;
	var Rnd = Math.random()*11;
   	var Usuario=document.frmusuario.txtUsuario;
	var Clave=document.frmusuario.txtClave;
	var ConfirmarClave=document.frmusuario.txtConfirmarClave;	
	var TipoUsuario=document.frmusuario.TipoUsuario;	
		   
   if (Apellidos.value.length==0)
      {alert('Ingrese sus Apellidos');Apellidos.focus();return;} 
	  
   if (Nombres.value.length==0)
      {alert('Ingrese su Nombres');Nombres.focus();return;} 
 
   if (Sexo.value.length==0)
      {alert('Seleccionar su Sexo');Sexo.focus();return;} 
 
   if (Email.value.length==0)
	  {alert('Ingrese su Email');Email.focus();return;} 
	else
	{
	   if (Email.value.indexOf('@' , 0) == -1 || Email.value.indexOf('.',0) == -1)
 	     {alert('El Email Ingresada no es un Formato Valido'); Email.focus();return;}
	   }
	   
    if (Usuario.value.length==0)
      {alert('Ingrese un nombre de Usuario');
	  Usuario.style.background=''; Usuario.style.color=''; Usuario.focus();$("#mensaje").html('');return;}
   else{
      if (Usuario.value.length>4){}
	  else{alert('El nombre de Usuario ingresado debe ser mayor a 4 Caracteres');Usuario.focus();return;}
      }
   if (Clave.value.length==0)
      {alert('Ingrese su Clave de Usuario');Clave.focus();return;}
   else{
      if (Clave.value.length>4){}
	  else{alert('La Clave de Usuario ingresada debe ser mayor a 4 Caracteres');Clave.focus();return;}
      }
	  
   if(ConfirmarClave.value.length==0)
    {alert('Ingrese La Confirmacion de Clave');ConfirmarClave.focus();return;}
   else{
     if (ConfirmarClave.value!==Clave.value)
      {alert('La Confirmacion de Clave debe ser Igual a la Clave');ConfirmarClave.focus();return;}
      }
  	
    $.post('Controller/controller_usuario.php',{
		
		accion:"INS",Apellidos:Apellidos.value,Nombres:Nombres.value,
		Sexo:Sexo.value,Email:Email.value,Usuario:Usuario.value,Clave:Clave.value,Rnd:Rnd,TipoUsuario:TipoUsuario.value
    },
    function(data){
   	  $("#mensaje").html(data);                  
    });
	
}
function link_navegador(url){
    var rnd=Math.random()*11;
    $("#cargando").show();
      $.get(url,{
                rnd:rnd
                },
       function(data){
        $("#formulario").html(data).fadeOut("slow").fadeIn("slow");
	    $("#cargando").hide();
    });
}

 document.write('<script language="javascript" src="../Resources/js/ajax_persona.js" type="text/javascript"></script>');
 document.write('<script language="javascript" src="../Resources/js/ajax_usuario.js" type="text/javascript"></script>');
 document.write('<script language="javascript" src="../Resources/js/ajax_lugar_turistico.js" type="text/javascript"></script>');
 document.write('<script language="javascript" src="../Resources/js/ajax_cronograma_turistico.js" type="text/javascript"></script>');
 document.write('<script language="javascript" src="../Resources/js/ajax_reservacion.js" type="text/javascript"></script>');