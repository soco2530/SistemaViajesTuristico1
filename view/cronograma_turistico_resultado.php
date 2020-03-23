<?php 
require_once('validar.php'); 
include_once ('../BussinessLogic/clsCronogramaTuristicoBL.php');
$datoBuscar=@$_GET["txtBuscar"];
$lista=  clsCronogramaTuristicoBL::Listar_CronogramaTuristico($datoBuscar);
if(count($lista)==0)
   exit;
?>
<table width="100%" border="0" align="center"  cellpadding="0"  cellspacing="0" class="table">
      <tbody>
       <?php
        for($i = 0; $i < count($lista); $i++)
         {    $IdCronogramaTuristico=$lista[$i]->getIdCronogramaTuristico();
              $Activo=$lista[$i]->getActivo();
              	if($i%2==0)
                        {$clase="fila2";}
		else 
                        {$clase="fila1"; }
        ?>
        <tr class="<?php echo $clase; ?>" onMouseOver="this.className='sombra'" onMouseOut="this.className='<?php echo $clase; ?>'">
                <td width="10%" height="25" align="center"><?php echo $IdCronogramaTuristico ?></td>
                <td width="17%">&nbsp;<?php echo $lista[$i]->getIdLugarTuristico(); ?></td>
				  <td width="12%" align="left">&nbsp;<?php echo $lista[$i]->getCiudad(); ?></td>
                <td width="10%">&nbsp;<?php echo $lista[$i]->getIdDiaSemana(); ?></td>
               	<td width="10%" align="left">&nbsp;<?php echo $lista[$i]->getHoraSalida(); ?></td>
                <td width="11%" align="center">&nbsp;<?php echo $lista[$i]->getHoraLlegada(); ?></td>
                <td width="10%" align="center">&nbsp;<?php echo $lista[$i]->getPrecio(); ?></td>
                <?php 
                   if($Activo)
	        {?>
		    <td width="6%" align="center">  <a onclick="fn_cronogramaturistico_anular(<?php echo $IdCronogramaTuristico ?>);" 
                        style="text-decoration:underline;cursor:pointer;" >
		     <img src="../Resources/imagenes/eliminar.png" width="20" height="20" border="0"  title="Anular Cronograma Turistico" />				 </a>                </td>
				
                 <?php  }  
		   else { ?> 
		     <td width="7%"  align="center" valign="middle">
		     <a  onclick="fn_cronogramaturistico_activar(<?php echo $IdCronogramaTuristico ?>);" 
		     style="text-decoration:underline;cursor:pointer;"  title="Activar Lugar Turistico" >
		     <img src="../Resources/imagenes/actualizar.png" alt=" Activar Cronograma Turistico" width="20" height="20" border="0" />					</a>				</td>
	         <?php  } ?>
      </tr>
          <?php
            }
           ?>
  </tbody>
     <tfoot>
        <tr>
            <td></td>
            <td height="40" colspan="7" align="right"><h4 style="color:#00CC33"><strong><?php echo count($lista); ?></strong> Registros encontrados&nbsp;&nbsp;&nbsp;</h4></td>
        </tr> <!--Pie tabla-->
    </tfoot>
</table>
