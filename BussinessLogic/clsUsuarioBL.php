<?php
//include_once ('../BussinessEntity/clsUsuario.php');
include_once '../DataAccessLogic/clsUsuarioDAL.php';
class clsUsuarioBL {
   
    static function Insertar_Usuario(clsUsuario $Usuario){
         return clsUsuarioDAL::Insertar_Usuario($Usuario);
     }
     
    static function IniciarSesion_usuario($Login,$Pasword){
         return clsUsuarioDAL::IniciarSesion_usuario($Login, $Pasword);
    }     
     
    static function cboPersona_Listar(){
         return clsUsuarioDAL::cboPersona_Listar();
    }
    
    static function Usuario_Nuevo(clsUsuario $Usuario){
          return clsUsuarioDAL::Usuario_Nuevo($Usuario);
    }
      
    static  function Usuario_Listar($datoBuscar){
         return clsUsuarioDAL::Usuario_Listar($datoBuscar);
    }
     
    static function Usuario_Anular($IdUsuario){
         return clsUsuarioDAL::Usuario_Anular($IdUsuario);
        }
    
    static function Usuario_Activar($IdUsuario){
         return clsUsuarioDAL::Usuario_Activar($IdUsuario);
    }
    
    static function Usuario_CambiarClave($IdUsuario,$Pasword){
       return clsUsuarioDAL::Usuario_CambiarClave($IdUsuario, $Pasword);
    }
}
?>
