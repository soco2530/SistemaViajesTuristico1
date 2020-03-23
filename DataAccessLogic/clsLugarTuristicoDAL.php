<?php
include_once 'clsConexionDAL.php';
include_once ('../BussinessEntity/clsLugarTuristico.php');
class clsLugarTuristicoDAL {
   
  static  function Insertar_LugarTuristico(clsLugarTuristico $LugarTuristico){
           $cn=clsConexionDAL::getConectarse();
           $sql="insert into lugarturistico(LugarTuristico,Ciudad,Imagen,Ubicacion,Activo)
                             values('$LugarTuristico->LugarTuristico','$LugarTuristico->Ciudad',
                             '$LugarTuristico->Imagen','$LugarTuristico->Ubicacion','$LugarTuristico->Activo')";
           $result=mysql_query($sql,$cn);
		
           if(!$result)
             { echo "No se puedo registrar el Lugar Turistico";}
           else
             {   
             echo "Datos Guardados con Exito";
             }        
     }
     
     static  function Listar_LugarTuristico($datoBuscar,$pagina,$registros){
       $cn=  clsConexionDAL::getConectarse();
       $lista=array();
        try{
           if (!$pagina){
                $inicio = 0;
                $pagina = 1;
              }
            else { 
                $inicio =($pagina - 1) * $registros;
            
              }
                     $sql="select * from lugarturistico where LugarTuristico like '$datoBuscar%' limit ".$inicio.",".$registros;
                            
                     $result=mysql_query($sql,$cn);
                     $nroRegistro= mysql_num_rows($result);
                      if($nroRegistro>0)
                      { 
                         while ($row = mysql_fetch_array($result))
                             {
                                $objLugarTuristico=new clsLugarTuristico();
                                $objLugarTuristico->setIdLugarTuristico($row["IdLugarTuristico"]);
                                $objLugarTuristico->setLugarTuristico($row["LugarTuristico"]);
                                $objLugarTuristico->setCiudad($row["Ciudad"]);
                                $objLugarTuristico->setImagen($row["Imagen"]);
                                $objLugarTuristico->setUbicacion($row["Ubicacion"]);
                                $objLugarTuristico->setActivo($row["Activo"]);
                                
                                
                                array_push($lista,$objLugarTuristico);
                             }
                        }
                        else
                        {    echo "<div align=center style='color=#009966;font-weight:bold; letter-spacing:2px; font-size:14px'><h2> No existen Lugares Turisticos : $datoBuscar</h2></div>";}
                   
                    mysql_free_result($result);
                    mysql_close($cn);
                   }
                    catch (Exception $e)
                    {  mysql_close($cn) ;  return $e->getMessage(); }

          return $lista;  
   }
   static function paginacion($datoBuscar,$pagina,$registros)
 {
   $cn=  clsConexionDAL::getConectarse();
   $sql="select * from lugarturistico where LugarTuristico like '$datoBuscar%'";
   $result=mysql_query($sql,$cn);
   $total_registro=mysql_num_rows($result);
   $total_paginas = ceil($total_registro / $registros); 
   if($total_registro) 
   {
       if(($pagina - 1) > 0) 
	{
	echo "<a onclick=paginar($pagina-1) class=paginador>< Back</a>";
	}
	for ($i=1; $i<=$total_paginas; $i++)
	{ 
	  if ($pagina == $i) 
	    echo "&nbsp;<b class=paginadoractivo>&nbsp;Page:".$pagina."</b>"; 
	  else
	    echo "&nbsp;<a onclick=paginar('$i') class=paginador >".$i."</a>"; 
	}
								  
	if(($pagina + 1)<=$total_paginas)
 	{
	echo "&nbsp;<a onclick=paginar($pagina+1) class=paginador>Next ></a>";
       }
   }
 }
   static function Anular_LugarTuristico($IdLugarTuristico){
       
       $cn=  clsConexionDAL::getConectarse();
       $sql="update lugarturistico set Activo=0 where IdLugarTuristico='$IdLugarTuristico'";
       $result=  mysql_query($sql,$cn);
       if(!$result)
         { $rpta="Error al anular  Lugar Turistico";}
       else
         { $rpta="Lugar Turistico anulada con Exito";}
       
       return $rpta;
   }
   
     static function Activar_LugarTuristico($IdLugarTuristico){
       
       $cn=  clsConexionDAL::getConectarse();
       $sql="update LugarTuristico set Activo=1 where IdLugarTuristico='$IdLugarTuristico'";
       $result=  mysql_query($sql,$cn);
       if(!$result)
         { $rpta="Error al Activar  Lugar Turistico";}
       else
         { $rpta="Lugar Turistico Activado con Exito";}
       
       return $rpta;
   }
}
?>
