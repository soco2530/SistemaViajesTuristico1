<?php
@session_start();
include_once("../DataAccessLogic/clsConexionDAL.php");
$cn=  clsConexionDAL::getConectarse();
$accion=@$_REQUEST["accion"];
$IdReservacion=@$_REQUEST["IdReservacion"];
$FechaReservacion=@$_POST["FechaReservacion"];
$HoraReservacion=@$_POST["HoraReservacion"];
$Persona=@$_POST["Persona"];
$IdUsuario=@$_SESSION['IdPersona'];
$Monto=@$_POST["Monto"];
$LugarTuristico=@$_POST["LugarTuristico"];
$Activo=1;

if($accion=="INSER")
{
  $sql="insert into Reservaciones(FechaReservacion,HoraReservacion,IdPersona,IdUsuario,Monto,IdLugarTuristico,Activo) 
                    values('$FechaReservacion','$HoraReservacion','$Persona','$IdUsuario','$Monto','$LugarTuristico','$Activo')";
  
  $result=mysql_query($sql,$cn);
  if(!$result)
  { echo "Error al Registrar la Reservacion";}
  else
  { echo "Reservacion Registrada con exito";}
}

if($accion=="DEL")
{
  $sql="update Reservaciones set Activo=0 where IdReservacion='$IdReservacion'";
  $result=mysql_query($sql,$cn);
  if(!$result)
  { echo "Error al Anular la Reservacion";}
  else
  { echo "Reservacion Anulada con exito";}
}
?>