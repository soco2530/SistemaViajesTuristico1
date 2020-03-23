<?php

include_once ('../BussinessEntity/clsUsuario.php');
include_once ('../BussinessLogic/clsUsuarioBL.php');

 $accion=$_REQUEST['accion'];
 $IdPersona=@$_REQUEST['Persona'];
 $Apellidos=@$_POST['Apellidos'];
 $Nombres=@$_POST['Nombres'];
 $Dni='';
 $Sexo=@$_POST['Sexo'];
 $FechaNacimiento='';
 $Direccion='';
 $Telefono='';
 $Celular='';
 $Email=@$_POST['Email'];
 $Rnd=@$_POST['Rnd'];
 $Activo=1;
  
 $Usuario=@$_POST['Usuario'];
 $Clave=@$_REQUEST['Clave'];
 $TipoUsuario=@$_POST['TipoUsuario'];
 $ActivoU=1;
 
 $objUsuario=new clsUsuario();
 $objUsuario->setIdPersona($IdPersona);
 $objUsuario->setApellidos($Apellidos);
 $objUsuario->setNombres($Nombres);
 $objUsuario->setDni($Dni);
 $objUsuario->setSexo($Sexo);
 $objUsuario->setFechaNacimiento($FechaNacimiento);
 $objUsuario->setDireccion($Direccion);
 $objUsuario->setTelefono($Telefono);
 $objUsuario->setCelular($Celular);
 $objUsuario->setEmail($Email);
 $objUsuario->setRnd($Rnd);
 $objUsuario->setActivo($Activo);
 
 $objUsuario->setLogin($Usuario);
 $objUsuario->setPasword($Clave);
 $objUsuario->setTipoUsuario($TipoUsuario);
 $objUsuario->setActivoU($ActivoU);
   
  if ($accion == "INS"){  
    clsUsuarioBL::Insertar_Usuario($objUsuario);
    }
    
  if ($accion=="INICIAR_SESSION") {
     clsUsuarioBL::IniciarSesion_usuario($Usuario, $Clave);
    }
    
  if ($accion=="NUEVO_USUARIO") {
     clsUsuarioBL::Usuario_Nuevo($objUsuario);
    }
   
  if ($accion == "ANULAR_USUARIO"){  
      echo clsUsuarioBL::Usuario_Anular($IdPersona);
    }
    
  if ($accion == "ACTIVAR_USUARIO"){  
      echo clsUsuarioBL::Usuario_Activar($IdPersona);
    }
  
  if($accion=="CAMBIAR_CLAVE"){
      echo clsUsuarioBL::Usuario_CambiarClave($IdPersona,$Clave);
  }
?>