<?php
include_once '../DataAccessLogic/clsCronogramaTuristicoDAL.php';
class clsCronogramaTuristicoBL {
 
     static function Insertar_CronogramaTuristico(clsCronogramaTuristico $CronogramaTuristico){
         return clsCronogramaTuristicoDAL::Insertar_CronogramaTuristico($CronogramaTuristico);
     }
     
     static function cboDiaSemana_Listar(){
         return clsCronogramaTuristicoDAL::cboDiaSemana_Listar();
     }
     
     static function cboLugarTuristico_Listar(){
         return clsCronogramaTuristicoDAL::cboLugarTuristico_Listar();
     }
     
    static  function Listar_CronogramaTuristico($datoBuscar){
        return clsCronogramaTuristicoDAL::Listar_CronogramaTuristico($datoBuscar);
    }
    
     static function Anular_CronogramaTuristico($IdCronogramaTuristico){
         return clsCronogramaTuristicoDAL::Anular_CronogramaTuristico($IdCronogramaTuristico);
     }
     
     static function Activar_CronogramaTuristico($IdCronogramaTuristico){
         return clsCronogramaTuristicoDAL::Activar_CronogramaTuristico($IdCronogramaTuristico);
     }
}

?>
