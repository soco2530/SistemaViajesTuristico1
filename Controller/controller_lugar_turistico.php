<?php
include_once ('../BussinessEntity/clsLugarTuristico.php');
include_once ('../BussinessLogic/clsLugarTuristicoBL.php');
 
$accion=$_REQUEST["accion"];
$IdLugarTuristico=@$_REQUEST["IdLugarTuristico"];
$LugarTuristico=@$_POST["LugarTuristico"];
$Ciudad=@$_POST["Ciudad"];
$Imagen='';
$Ubicacion=@$_POST["Ubicacion"];
$Activo=1;
       
$objLugarTuristico=new clsLugarTuristico();
$objLugarTuristico->LugarTuristico($IdLugarTuristico, $LugarTuristico, $Ciudad, $Imagen, $Ubicacion,$Activo);

if($accion=="INSERTAR_LUGAR_TURISTICO")
{  /* if(!in_array($type, $mimetypes))
            { echo "<marquee>El Archivo subido no es un formato valido</marquee>";
             echo $Imagen;
            
            }
         else
            {*/
              echo clsLugarTuristicoBL::Insertar_LugarTuristico($objLugarTuristico);
          //     move_uploaded_file($tmp_name, "$destino/$Imagen");
         // }
}

if($accion=="ANULAR_LUGAR_TURISTICO")
{
    echo clsLugarTuristicoBL::Anular_LugarTuristico($IdLugarTuristico);
}

if($accion=="ACTIVAR_LUGAR_TURISTICO")
{
    echo clsLugarTuristicoBL::Activar_LugarTuristico($IdLugarTuristico);    
}  
?>
