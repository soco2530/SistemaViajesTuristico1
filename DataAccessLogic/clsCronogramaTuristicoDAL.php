<?php
include_once 'clsConexionDAL.php';
include_once ('../BussinessEntity/clsCronogramaTuristico.php');
class clsCronogramaTuristicoDAL {
    
    static function Insertar_CronogramaTuristico(clsCronogramaTuristico $CronogramaTuristico){
        
        $cn=  clsConexionDAL::getConectarse();
        $sql="insert into cronogramaturistico(IdLugarTuristico,IdDiaSemana,HoraSalida,
                                              HoraLlegada,Precio,Activo)
                  values('$CronogramaTuristico->IdLugarTuristico','$CronogramaTuristico->IdDiaSemana',
                 '$CronogramaTuristico->HoraSalida','$CronogramaTuristico->HoraLlegada',$CronogramaTuristico->Precio,
                 '$CronogramaTuristico->Activo')";
       
        $result=  mysql_query($sql,$cn);
        if(!$result)
        { echo "No se puedo registrar cronograma Turistico";}
        else
        {echo "Cronograma turistico registrado con exito";}  
    }
    
    static function cboDiaSemana_Listar()
    {   $lista=array();
        $cn=  clsConexionDAL::getConectarse();
        $sql="select IdDiaSemana ,DiaSemana from diasemana"; 
             
        $result=mysql_query($sql,$cn);
        while($row=mysql_fetch_array($result))
        {
                $lista[]=$row;
        }
        mysql_close($cn);
        return $lista;
    }
    
      static function cboLugarTuristico_Listar()
    {   $lista=array();
        $cn=  clsConexionDAL::getConectarse();
        $sql="select IdLugarTuristico,LugarTuristico from lugarturistico where Activo=1"; 
             
        $result=mysql_query($sql,$cn);
        while($row=mysql_fetch_array($result))
        {
                $lista[]=$row;
        }
        mysql_close($cn);
        return $lista;
    }
    
    static  function Listar_CronogramaTuristico($datoBuscar){
       $cn=  clsConexionDAL::getConectarse();
         $lista=array();
                  try{
                     $sql="select IdCronogramaTuristico,LugarTuristico,Ciudad,DiaSemana,HoraSalida,HoraLlegada,
                           Precio,C.Activo from cronogramaturistico C inner join 
                          lugarturistico LT on C.IdLugarTuristico=LT.IdLugarTuristico inner join diasemana S
                          on C.IdDiaSemana=S.IdDiaSemana  where LugarTuristico like '$datoBuscar%'";
                     $result=mysql_query($sql,$cn);
                      $nroRegistro= mysql_num_rows($result);
                      if($nroRegistro>0)
                      { 
                         while ($row = mysql_fetch_array($result))
                             {
                                $objCronogramaTuristico=new clsCronogramaTuristico();
                                $objCronogramaTuristico->setIdCronogramaTuristico($row["IdCronogramaTuristico"]);
                                $objCronogramaTuristico->setIdLugarTuristico($row["LugarTuristico"]);
                                $objCronogramaTuristico->setIdDiaSemana($row["DiaSemana"]);
                                $objCronogramaTuristico->setHoraSalida($row["HoraSalida"]);
                                $objCronogramaTuristico->setHoraLlegada($row["HoraLlegada"]);
                                $objCronogramaTuristico->setPrecio($row["Precio"]);
                                $objCronogramaTuristico->setCiudad($row["Ciudad"]);
                                $objCronogramaTuristico->setActivo($row["Activo"]);
                                
                                array_push($lista,$objCronogramaTuristico);
                             }
                        }
                        else
                        {    echo "<div align=center style='color=#009966;font-weight:bold; letter-spacing:2px; font-size:14px'><h2> No existen Cronogramas Turisticos : $datoBuscar</h2></div>";}
                   
                    mysql_free_result($result);
                    mysql_close($cn);
                   }
                    catch (Exception $e)
                    {  mysql_close($cn) ;  return $e->getMessage(); }

          return $lista;  
   }
   
    static function Anular_CronogramaTuristico($IdCronogramaTuristico){
       
       $cn=  clsConexionDAL::getConectarse();
       $sql="update cronogramaturistico set Activo=0 where IdCronogramaTuristico='$IdCronogramaTuristico'";
       $result=  mysql_query($sql,$cn);
       if(!$result)
         { $rpta="Error al anular  Cronograma Turistico";}
       else
         { $rpta="Cronograma Turistico anulada con Exito";}
       
       return $rpta;
   }
   
   static function Activar_CronogramaTuristico($IdCronogramaTuristico){
       
       $cn=  clsConexionDAL::getConectarse();
       $sql="update cronogramaturistico set Activo=1 where IdCronogramaTuristico='$IdCronogramaTuristico'";
       $result=  mysql_query($sql,$cn);
       if(!$result)
         { $rpta="Error al activar  Cronograma Turistico";}
       else
         { $rpta="Cronograma Turistico activar con Exito";}
       
       return $rpta;
   }
}
?>
