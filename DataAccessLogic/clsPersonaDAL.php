<?php
include_once('clsConexionDAL.php');
include_once '../BussinessEntity/clsPersona.php';
  class  clsPersonaDAL {
  
   var $rpta="";

   static function Inserta_Persona( clsPersona $Persona)
    {
       $cn=  clsConexionDAL::getConectarse();
                 
           $sql="insert into persona(Apellidos,Nombres,Dni,Sexo,FechaNacimiento,Direccion,
                                    Telefono,Celular,Email,Rnd,Activo)
		       	    values('$Persona->Apellidos','$Persona->Nombres',
                                    '$Persona->Dni','$Persona->Sexo','$Persona->FechaNacimiento',
                                    '$Persona->Direccion','$Persona->Telefono','$Persona->Celular',
                                    '$Persona->Email','$Persona->Rnd','$Persona->Activo')";
       
           $result=  mysql_query($sql,$cn);
         
           if(!$result)
           {
               $rpta="Error al Registrar la Persona...Verifique ";
           }
           else
           {   $rpta="La Persona a Sido Registrada con Exito";
           
           }
         return $rpta;
   }
   
   static function Modificar_Persona( clsPersona $Persona)
    {
          $cn=  clsConexionDAL::getConectarse();
                 
           $sql="update persona set Apellidos='$Persona->Apellidos',Nombres='$Persona->Nombres',
                                    Dni='$Persona->Dni',Sexo='$Persona->Sexo',FechaNacimiento='$Persona->FechaNacimiento',
                                    Direccion='$Persona->Direccion',Telefono='$Persona->Telefono',Celular='$Persona->Celular',
                                    Email='$Persona->Email' where IdPersona=$Persona->IdPersona";
	  
           $result=  mysql_query($sql,$cn);
         
           if(!$result)
           {
               $rpta="Error al modifcar la Persona...Verifique ";
           }
           else
           {   $rpta="La Persona a Sido Modificada con Exito";
               echo "<script>subnavegador_menu('persona_buscar.php');</script>";           
           }
         return $rpta;
   }
   
   static function Listar_Persona($datoBuscar,$pagina){
       $cn=  clsConexionDAL::getConectarse();
         $lista=array();
       try{
           
            $registros=20;
            if (!$pagina){
                $inicio = 0;
                $pagina = 1;
              }
            else { 
                $inicio =($pagina - 1) * $registros;
            
              }
            $sql="select * from persona where concat(Apellidos,' ',Nombres) like '$datoBuscar%'";
            $sql="$sql"." LIMIT ".$inicio.", ".$registros;
            $result=mysql_query($sql,$cn)or die(mysql_error('No se pudo ejecutar la consulta'));
            $total_registro=mysql_num_rows($result);
            if($total_registro>0)
               { 
                while ($row = mysql_fetch_array($result))
                      {
                                  $objPersona=new clsPersona();
                                  $objPersona->setIdPersona($row["IdPersona"]);
                                  $objPersona->setApellidos($row["Apellidos"]);
                                  $objPersona->setNombres($row["Nombres"]);
                                  $objPersona->setDni($row["Dni"]);
                                  $objPersona->setSexo($row["Sexo"]);
                                  $objPersona->setFechaNacimiento($row["FechaNacimiento"]);
                                  $objPersona->setDireccion($row["Direccion"]);
                                  $objPersona->setTelefono($row["Telefono"]);
                                  $objPersona->setCelular($row["Celular"]);
                                  $objPersona->setEmail($row["Email"]);
                                  $objPersona->setActivo($row["Activo"]);

                                 array_push($lista,$objPersona);
                     }
               }
           else
               {    echo "<div align=center style='color=#009966;font-weight:bold; letter-spacing:2px; font-size:14px'><h2> No existe Personas $datoBuscar</h2></div>";}

          mysql_free_result($result);
          mysql_close($cn);
       }
       catch (Exception $e)
                    {  mysql_close($cn) ;  return $e->getMessage(); }

          return $lista; 
   }
  
 static function paginacion($datoBuscar,$pagina)
 {
   $cn=  clsConexionDAL::getConectarse();
   $registros=20;
   $PaginasIntervalo=5;  
   $sql="select IdPersona from persona where concat(Apellidos,' ',Nombres) like '$datoBuscar%'";
   $result=mysql_query($sql,$cn);
   $total_registro=mysql_num_rows($result);	

   $PagUlt = $total_registro/$registros;
   $Res = $total_registro%$registros;

    if($Res>0) $PagUlt=floor($PagUlt)+1;
    if($pagina>($PaginasIntervalo+1)){
        echo "<a onclick=listar('1') class='paginador'><b>Inicio</b></a>";
        echo "&nbsp;";
    }
    
    for($i = ($pagina-$PaginasIntervalo);$i<$pagina;$i++){
       if($i>=1){
        echo "<a onclick=listar('$i') class='paginador'><b>".$i."</b></a>";
        echo "&nbsp;";
       }
    }
    echo "<b class='paginadoractivo'>Page:".$pagina."</b>&nbsp;";
    for($i=($pagina+1);$i<=($pagina+$PaginasIntervalo);$i++){
        if($i<=$PagUlt){
        echo "<a onclick=listar('$i') class='paginador'><b>".$i."</b></a>";
        echo "&nbsp;";
        }
    }
    if($pagina<($PagUlt-$PaginasIntervalo)){
        echo "<a onclick=listar('$PagUlt') class='paginador'><b>Ultimo</b></a>";
        echo "&nbsp;";
    }
    echo "<br/><br";
        
   }
   
static function Anular_Persona($IdPersona){
       
       $cn=  clsConexionDAL::getConectarse();
       $sql="update persona set Activo=0 where IdPersona='$IdPersona'";
       $result=  mysql_query($sql,$cn);
       if(!$result)
         { $rpta="Error al anular a la Persona";}
       else
         { $rpta="Persona anulada con Exito";}
       
       return $rpta;
   }
   
   static function Activar_Persona($IdPersona){
              $cn=  clsConexionDAL::getConectarse();
       $sql="update persona set Activo=1 where IdPersona='$IdPersona'";
       $result=  mysql_query($sql,$cn);
       if(!$result)
         { $rpta="Error al activar a la Persona";}
       else
         { $rpta="La Persona activada con Exito";}
       
       return $rpta;
   }
   
   static  function Editar_Persona($IdPersona){
        
            $registro_persona=  array();  
            $cn=  clsConexionDAL::getConectarse();
            try{
               $sql="select * from persona where IdPersona='$IdPersona'";
               $result=mysql_query($sql,$cn);
               $row=  mysql_fetch_array($result);
               
                $objPersona=new clsPersona();
                $objPersona->setIdPersona($row["IdPersona"]);
                $objPersona->setApellidos($row["Apellidos"]);
                $objPersona->setNombres($row["Nombres"]);
                $objPersona->setDni($row["Dni"]);
                $objPersona->setSexo($row["Sexo"]);
                $objPersona->setFechaNacimiento($row["FechaNacimiento"]);
                $objPersona->setDireccion($row["Direccion"]);
                $objPersona->setTelefono($row["Telefono"]);
                $objPersona->setCelular($row["Celular"]);
                $objPersona->setEmail($row["Email"]);

                array_push($registro_persona, $objPersona);
               
                mysql_free_result($result);
                mysql_close($cn);
            }
            catch (Exception $e)
            {   mysql_close($cn);
                return $e->getMessage();
            }
       return $registro_persona;
   }
}
?>
