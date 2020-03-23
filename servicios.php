<?php 

include_once ('DataAccessLogic/clsConexionDAL.php');
$cn=  clsConexionDAL::getConectarse();
$sql="select * from LugarTuristico where Activo=1";
$result=  mysql_query($sql,$cn);
?>
<style type="text/css">
<!--
.Estilo1 {
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style>

<div  style="95%; margin-left:2.5%; margin-right:2.5%">
<table width="100%" border="0" align="center"  cellpadding="0"  cellspacing="0">
   <thead><!--cabecera-->
        <tr>
          <th height="60" colspan="3"  align="left" valign="bottom"><strong style="color:#00CC33; font-size:30px">LUGARES TURISTICOS </strong></th>
          <th width="20%" align="left">&nbsp;</th>
          <th width="39%" colspan="3" align="center">&nbsp;</th>
       </tr>
	   
        <tr style="color:#FFFFFF" background="Resources/imagenes/bg-bubplastic.gif">
            <th width="19%" height="40" align="left" >&nbsp;&nbsp;<span>Lugar Turistico </span></th>
            <th width="10%" align="left"><span>Ciudad</span></th>
            <th width="12%" align="left"><span> Ubicacion </span></th>
            <th align="center">Imagen </th>
            <th  align="center">Horarios </th>
      </tr>
   </thead>
   <tbody>
	 <tr>
	   <td colspan="5">
		<div style="overflow:auto; height:500px; width:100%">
			<table width="100%" border="0" align="center"  cellpadding="0"  cellspacing="0">
			  <tbody>
		   <?php
		   $i=0;
			while ($row= mysql_fetch_array($result))
			 {    $i=$i+1;
					if($i%2==0)
							{$clase="fila2";}
					else 
					{$clase="fila1"; }
					
			?>
			
			<tr class="<?php echo $clase; ?>">
					<td width="19%" height="25">&nbsp;&nbsp;<?php echo $row["LugarTuristico"]; ?></td>
					<td width="10%">&nbsp;<?php echo $row["Ciudad"]; ?></td>
					<td width="12%">&nbsp;<?php echo $row["Ubicacion"]; ?></td>
					<td width="20%" align="center">&nbsp;
												<?php 
												 if( $row["Imagen"])
												 {
												 ?>
												 <img src="Resources/FotosLugarTuristico/<?php echo $row["Imagen"]; ?>" width=250 height=250 border=0  align=middle />
												 <?php
												 }else{
												 ?>
												 <img src="Resources/FotosLugarTuristico/sinfoto.png" width="250" height="250" border="0"  align="middle" />
												<?php } ?>		           </td>
					<td width="39%" valign="top">
					  <table width="98%" border="0" align="right" cellpadding="0" cellspacing="0" >
					    <tr background="Resources/imagenes/bg-bubplastic-h-lime.gif">
						  <td height="40"><span class="Estilo1">Dia Semana</span></td>
						  <td align="center"><span class="Estilo1">Hora Salida</span></td>
						  <td align="center"><span class="Estilo1">Hora Llegada</span></td>
						  <td align="center"><span class="Estilo1">Precio</span></td>
					    </tr>
				         		 
					 <?php
					   $sql1="select DiaSemana,HoraSalida,HoraLlegada,Precio from CronogramaTuristico C inner join DiaSemana D
					       on C.IdDiaSemana=D.IdDiaSemana where IdLugarTuristico='".$row["IdLugarTuristico"]."' and Activo=1";
					   $result1=mysql_query($sql1,$cn);
					   $c=0;
					  if(mysql_num_rows($result1)>0)
					   {
						  while( $row1=mysql_fetch_assoc($result1))
							 {  $c=$c+1;
								if($c%2==0)
										{$clase="fila2";}
								else 
								{$clase="fila1"; }
							  ?>
						 <tr class="<?php echo $clase; ?>" onMouseOver="this.className='sombra'" onMouseOut="this.className='<?php echo $clase; ?>'">
						   <td height="30">&nbsp;<?php echo $row1["DiaSemana"]; ?></td>
						   <td align="center"><?php echo $row1["HoraSalida"]; ?></td>
						   <td align="center"><?php echo $row1["HoraLlegada"]; ?></td>
						   <td align="center"><?php echo $row1["Precio"]; ?></td>
						 </tr>
					  <?php }} else {?>
					    <tr> 
						    <td height="30" colspan="4" align="center"><strong>Sin Programacion</strong></td>
					    </tr>
					    <?php }
					   ?>
				      </table>			    </td>
		  </tr>
			  <?php
				}
			   ?>
	  </tbody>
	</table>
	<br/>
	 </div>	   </td>
  </tr>
  </tbody>
  
     <tfoot>
       
		   <tr background="Resources/imagenes/bg-bubplastic.gif">
		     <th height="35" align="center">&nbsp;</th>
		     <td height="10" align="left">&nbsp;</td>
		     <th align="left">&nbsp;</th>
		     <th align="left">&nbsp;</th>
		     <th colspan="3" align="center">&nbsp;</th>
       </tr>
		   <tr>
          <th height="35" align="center">&nbsp;</th>
          <td height="10" align="left">&nbsp;</td>
          <th align="left">&nbsp;</th>
          <th align="left">&nbsp;</th>
          <th colspan="3" align="center">&nbsp;</th>
       </tr>
    </tfoot>
  </table>
</div>