<?php
include_once '../DataAccessLogic/clsLugarTuristicoDAL.php';
class clsLugarTuristicoBL {
    
    static  function Insertar_LugarTuristico(clsLugarTuristico $LugarTuristico){
        return clsLugarTuristicoDAL::Insertar_LugarTuristico($LugarTuristico);
   }
    
    static  function Listar_LugarTuristico($datoBuscar,$pagina,$registros){
        return clsLugarTuristicoDAL::Listar_LugarTuristico($datoBuscar,$pagina,$registros);
    }
    
     static function paginacion($datoBuscar,$pagina,$registros)
     {
         return clsLugarTuristicoDAL::paginacion($datoBuscar, $pagina,$registros);
     }
     
     static function Activar_LugarTuristico($IdLugarTuristico){
         return clsLugarTuristicoDAL::Activar_LugarTuristico($IdLugarTuristico);
    }
    
    static function Anular_LugarTuristico($IdLugarTuristico){
         return clsLugarTuristicoDAL::Anular_LugarTuristico($IdLugarTuristico);
    }
    
}
?>
