<?php 
include_once ('../DataAccessLogic/clsConexionDAL.php');
$cn=  clsConexionDAL::getConectarse();
$datoBuscar=@$_GET["txtBuscar"];
$sql="select IdReservacion,FechaReservacion,HoraReservacion,Login,concat(Apellidos,' ',Nombres) as Persona,
       LugarTuristico,Monto from Reservaciones R inner join Persona P on R.IdPersona=P.IdPersona 
      inner join LugarTuristico T on R.IdLugarTuristico=T.IdLugarTuristico inner join Usuario U
	  on P.IdPersona=U.IdUsuario where R.Activo=1 and concat(Apellidos,' ',Nombres) like '$datoBuscar%'";
$result=  mysql_query($sql,$cn);
?>
<table width="100%" align="center"  cellpadding="0"  cellspacing="0" class="table">
    <thead><!--cabecera-->
    </thead>
    <tbody>
       <?php
	   $i=0;
        while($row=mysql_fetch_array($result))
         {            	if($i%2==0)
                        {$clase="fila2";}
		else 
                        {$clase="fila1"; }
        ?>
        <tr class="<?php echo $clase; ?>" onMouseOver="this.className='sombra'" onMouseOut="this.className='<?php echo $clase; ?>'">
                <td width="7%" align="center"><?php echo $row["IdReservacion"]; ?></td>
				<td width="22%" align="left"><?php echo $row["Persona"]; ?></td>
                <td width="11%">&nbsp;<?php echo $row["FechaReservacion"]; ?></td>
                <td width="9%">&nbsp;<?php echo $row["HoraReservacion"]; ?></td>
                <td width="21%" align="center">&nbsp;<?php echo $row["LugarTuristico"]; ?></td>
                <td width="11%" align="center">&nbsp;<?php echo $row["Monto"]; ?></td>
                <td width="13%">&nbsp;<?php echo $row["Login"]; ?></td>
             
		    <td width="6%" align="center" valign="middle">
		     <a onclick="fn_reservacionturistico_anular(<?php echo $row["IdReservacion"];  ?>);" 
                        style="text-decoration:underline;cursor:pointer;">
			   <img src="../Resources/imagenes/eliminar.png"  title="Anular Reservacion" width="30" height="25" border="0" />				 </a>			 </td>
      </tr>
          <?php
            }
           ?>
  </tbody>
     <tfoot>
        <tr>
            <td></td>
            <td height="40" colspan="7" align="right"><h4 style="color:#00CC33">&nbsp;</h4></td>
        </tr> <!--Pie tabla-->
    </tfoot>
</table>
