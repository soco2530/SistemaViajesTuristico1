<?php
include_once('clsConexionDAL.php');
include_once('../BussinessEntity/clsUsuario.php');
class clsUsuarioDAL {
    
    var $rpta="";
    
  static function Insertar_Usuario(clsUsuario $Usuario)
    {   
        $cn=  clsConexionDAL::getConectarse();
       
        $sql="select IdUsuario from usuario where Login='$Usuario->Login'";
        $result=mysql_query($sql,$cn);
        if (mysql_num_rows($result)>0)
 	     {echo "El Usuario ingresado ya existe..Por Favor Ingrese Otro Usuario";
		 echo "<script language=javascript>
			   	var Usuario=document.frmnuevo_usuario.txtUsuario;
			    Usuario.style.background='#FF0000'; Usuario.style.color='#FFFFFF'; Usuario.focus();
			  </script>";
	     exit;
         }
        else 
        {   
	     $sql="insert into persona(Apellidos,Nombres,Dni,Sexo,FechaNacimiento,Direccion,
                                    Telefono,Celular,Email,Rnd,Activo)
		       	     values('$Usuario->Apellidos','$Usuario->Nombres',
                                    '$Usuario->Dni','$Usuario->Sexo','$Usuario->FechaNacimiento',
                                    '$Usuario->Direccion','$Usuario->Telefono','$Usuario->Celular',
                                    '$Usuario->Email','$Usuario->Rnd','$Usuario->Activo')";
            $result=mysql_query($sql,$cn);
           
	    $sql="select IdPersona from persona where Rnd='$Usuario->Rnd'";
	     $codigo=mysql_query($sql,$cn);
	     $rsCodigo=mysql_fetch_array($codigo);  
	     $nPerCodigo =$rsCodigo["IdPersona"];
             		   	
	   $sql="insert into usuario(IdUsuario,Login,Pasword,TipoUsuario,Activo)
		                 values('$nPerCodigo','$Usuario->Login','$Usuario->Pasword','$Usuario->TipoUsuario','$Usuario->ActivoU')";
	 
            $result=mysql_query($sql,$cn);
	    if (!$result )
            { 
                echo "Error al Registrarse como Usuario"; exit;   }
	    else
	     {   echo "Sus Datos de Usuario se Registro Correctamente";
		 echo "<script language=javascript>
		        iniciar_sesion_registrarse();
		     </script>";
	         exit;
           }
       }

    }
    
   static function IniciarSesion_usuario($Login,$Pasword)
    {
     @session_start();
     $cn=  clsConexionDAL::getConectarse();
     $sql ="select per.IdPersona,Apellidos,Nombres,usu.TipoUsuario from persona per
            inner join usuario usu on usu.IdUsuario = per.IdPersona 
            where usu.Login='$Login' and usu.Pasword='$Pasword' 
	    and usu.Activo=1";

      $result = mysql_query($sql,$cn);

      if($rsusuario = mysql_fetch_array($result)){
            $_SESSION['IdPersona']=$rsusuario["IdPersona"];
            $_SESSION['Apellidos']=$rsusuario["Apellidos"];
            $_SESSION['Nombres']=$rsusuario["Nombres"];
            $_SESSION['usuario']=$Login;
            $_SESSION['TipoUsuario']=$rsusuario["TipoUsuario"];;

                if($rsusuario["TipoUsuario"]=="Personal")
                     {
                    sleep(2);
                          echo "Bienvenido Usuario";
                          echo "<script language=javascript>
                                          location.href='view/admin.php';
                                          </script>";
                           exit();
                   }
                if($rsusuario["TipoUsuario"]=="Cliente")
                    {
                     sleep(2);
                        echo "Bienvenido Usuario";
                        echo "<script language=javascript>
                                        location.href='index.php';
                                        </script>";
                         exit();
                    }
      }else{
 	 sleep(1);
         echo "Usuario o Clave Incorrecta";
	 exit();
      }
    }
    
    static function cboPersona_Listar()
    {   $lista=array();
        $cn=  clsConexionDAL::getConectarse();
        $sql="select IdPersona,concat(Apellidos,' ',Nombres) as Persona from persona 
              where Activo=1";
        $result=mysql_query($sql,$cn);
        while($row=mysql_fetch_array($result))
        {
                $lista[]=$row;
        }
        mysql_close($cn);
        return $lista;
    }
    
    static function Usuario_Nuevo(clsUsuario $Usuario){
        $cn=  clsConexionDAL::getConectarse();
        $sql="select IdUsuario from usuario where IdUsuario=$Usuario->IdPersona";
        $result=  mysql_query($sql);
         if (mysql_num_rows($result)>0)
         { echo "La Persona Elegida ya ha es un Usuario";
            exit;
         }
        $sql="select IdUsuario from usuario where Login='$Usuario->Login'";
        $result=mysql_query($sql,$cn);
        if (mysql_num_rows($result)>0)
          {
           echo "El Usuario ingresado ya existe..Por Favor Ingrese Otro Usuario";
		 echo "<script language=javascript>
			    var Usuario=document.frmusuario.Usuario;
			    Usuario.style.background='#FF0000'; Usuario.style.color='#FFFFFF'; Usuario.focus();
			  </script>";
	     exit;
          }
         
        $sql="insert into usuario values('$Usuario->IdPersona','$Usuario->Login','$Usuario->Pasword',
                                         '$Usuario->TipoUsuario','$Usuario->ActivoU')";
        $result=  mysql_query($sql,$cn);
        if(!$result)
        {  echo "La Persona ya Tiene un UsurioError al Registro al nuevo Usuario";}
        else
        {   echo "Usuario Registrado con Exito";
            echo "<script>
                    var Usuario=document.frmusuario.Usuario;
	            Usuario.style.background=''; Usuario.style.color='';
		    fn_limpiar_usuario();
            </script>";
            exit;
        }
    }
   
    static  function Usuario_Listar($datoBuscar){
       $cn=  clsConexionDAL::getConectarse();
         $lista=array();
                  try{
                     $sql="select IdUsuario,Apellidos,Nombres,Login,TipoUsuario,U.Activo
                           from persona P inner join usuario U on U.IdUsuario=P.IdPersona
                           where concat(Apellidos,' ',Nombres) like '$datoBuscar%'";
                     $result=mysql_query($sql,$cn);
                      $nroRegistro= mysql_num_rows($result);
                      if($nroRegistro>0)
                      { 
                         while ($row = mysql_fetch_array($result))
                             {
                                $objUsuario=new clsUsuario();
                                $objUsuario->setIdPersona($row["IdUsuario"]);
                                $objUsuario->setApellidos($row["Apellidos"]);
                                $objUsuario->setNombres($row["Nombres"]);
                                $objUsuario->setLogin($row["Login"]);
                                $objUsuario->setTipoUsuario($row["TipoUsuario"]);
                                $objUsuario->setActivoU($row["Activo"]);
                                
                                array_push($lista,$objUsuario);
                             }
                        }
                        else
                        {    echo "<div align=center style='color=#009966;font-weight:bold; letter-spacing:2px; font-size:14px'><h2> NO EXISTE USUARIOS : $datoBuscar</h2></div>";}
                   
                    mysql_free_result($result);
                    mysql_close($cn);
                   }
                    catch (Exception $e)
                    {  mysql_close($cn) ;  return $e->getMessage(); }

          return $lista;  
     }
     
    static function Usuario_Anular($IdUsuario){
       $cn=  clsConexionDAL::getConectarse();
       $sql="update usuario set Activo=0 where IdUsuario='$IdUsuario'";
       $result=  mysql_query($sql,$cn);
       if(!$result)
         { $rpta="Error al anular al Usuario";}
       else
         { $rpta="Usuario anulado con Exito";}
       
       return $rpta;
    }
    
     static function Usuario_Activar($IdUsuario){
       $cn=  clsConexionDAL::getConectarse();
       $sql="update usuario set Activo=1 where IdUsuario='$IdUsuario'";
       $result=  mysql_query($sql,$cn);
       if(!$result)
         { $rpta="Error al activar al Usuario";}
       else
         { $rpta="Usuario activado con Exito";}
       
       return $rpta;
    }
    
      static function Usuario_CambiarClave($IdUsuario,$Pasword){
       
       $cn=  clsConexionDAL::getConectarse();
       $sql="update usuario set Pasword='$Pasword' where IdUsuario='$IdUsuario'";
       $result=  mysql_query($sql,$cn);
       if(!$result)
         { $rpta="no se puedo cambiar la clave";}
       else
         { $rpta="su clave ha sido cambiada con Exito";}
       
       return $rpta;
    }
}
?>
