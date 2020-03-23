<?php
include_once ('../BussinessEntity/clsCronogramaTuristico.php');
include_once ('../BussinessLogic/clsCronogramaTuristicoBL.php');
 
$accion=$_REQUEST["accion"];
$IdCronogramaTuristico=@$_REQUEST["IdCronogramaTuristico"];
$IdLugarTuristico=@$_POST["LugarTuristico"];
$IdDiaSemana=@$_POST["DiaSemana"];
$HoraSalida=@$_POST["HoraSalida"];
$HoraLlegada=@$_POST["HoraLlegada"];
$Precio=@$_POST["Precio"];
$Activo=1;

$objCronogramaTuristico=new clsCronogramaTuristico();
$objCronogramaTuristico->CronogramaTuristico($IdCronogramaTuristico, $IdLugarTuristico, $IdDiaSemana, $HoraSalida, $HoraLlegada, $Precio, $Activo);

if($accion=="INSERTAR_CRONOGRAMA_TURISTICO")
{
    echo clsCronogramaTuristicoBL::Insertar_CronogramaTuristico($objCronogramaTuristico);
}

if($accion=="ANULAR_CRONOGRAMA_TURISTICO")
{
    echo clsCronogramaTuristicoBL::Anular_CronogramaTuristico($IdCronogramaTuristico);
}

if($accion=="ACTIVAR_CRONOGRAMA_TURISTICO")
{
    echo clsCronogramaTuristicoBL::Activar_CronogramaTuristico($IdCronogramaTuristico);
}
?>
