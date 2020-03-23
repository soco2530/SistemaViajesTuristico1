<?php
include_once ('../BussinessEntity/clsPersona.php');
include_once ('../BussinessLogic/clsPersonaBL.php');

 $accion=@$_REQUEST['accion'];
 $IdPersona=@$_REQUEST['IdPersona'];
 $Apellidos=@$_POST['Apellidos'];
 $Nombres=@$_POST['Nombres'];
 $Dni=@$_POST['Dni'];
 $Sexo=@$_POST['Sexo'];
 $FechaNacimiento=@$_POST['FechaNacimiento'];
 $Direccion=@$_POST['Direccion'];
 $Telefono=@$_POST['Telefono'];;
 $Celular=@$_POST['Celular'];;
 $Email=@$_POST['Email'];
 $Rnd=@$_POST['Rnd'];
 $Activo=1;
 
 $objPersona=new clsPersona();
 $objPersona->Persona($IdPersona, $Apellidos, $Nombres, $Dni, $Sexo, $FechaNacimiento, $Direccion, $Telefono, $Celular, $Email, $Rnd, $Activo);
 
 /* otra forma de Asignar 
 $objPersona->setIdPersona($IdPersona);
 $objPersona->setApellidos($Apellidos);
 $objPersona->setNombres($Nombres);
 $objPersona->setDni($Dni);
 $objPersona->setSexo($Sexo);
 $objPersona->setFechaNacimiento($FechaNacimiento);
 $objPersona->setDireccion($Direccion);
 $objPersona->setTelefono($Telefono);
 $objPersona->setCelular($Celular);
 $objPersona->setEmail($Email);
 $objPersona->setRnd($Rnd);
 $objPersona->setActivo($Activo);*/
 
 if ($accion == "INST_PERSONA"){  
    echo clsPersonaBL::Inserta_Persona($objPersona);
    }
 if ($accion == "EDIT_PERSONA"){  
      echo clsPersonaBL::Modificar_Persona($objPersona);
    }
    
 if ($accion == "ANULAR_PERSONA"){  
      echo clsPersonaBL::Anular_Persona($IdPersona);
    }
    
 if ($accion == "ACTIVAR_PERSONA"){  
      echo clsPersonaBL::Activar_Persona($IdPersona);
    }

    
?>
