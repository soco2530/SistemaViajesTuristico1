<?php
//include_once ('../BussinessEntity/clsUsuario.php');
include_once '../DataAccessLogic/clsPersonaDAL.php';
class clsPersonaBL {
    
   static function Inserta_Persona( clsPersona $Persona){
       return clsPersonaDAL::Inserta_Persona($Persona);
   }
   
   static  function Listar_Persona($datoBuscar,$pagina){
         return clsPersonaDAL::Listar_Persona($datoBuscar,$pagina);
    }
    
  static function paginacion($datoBuscar,$pagina)
 {
      return clsPersonaDAL::paginacion($datoBuscar, $pagina);
  }
   static function Anular_Persona($IdPersona){
        return clsPersonaDAL::Anular_Persona($IdPersona);
   }
   
   static function Activar_Persona($IdPersona){
       return clsPersonaDAL::Activar_Persona($IdPersona);
   }
   static  function Editar_Persona($IdPersona){
       return clsPersonaDAL::Editar_Persona($IdPersona);
   }
   
   static function Modificar_Persona( clsPersona $Persona){
       return clsPersonaDAL::Modificar_Persona($Persona);
   }
  
}
?>
