<?php require_once('validar.php'); ?>
<div >
	 <table  width="100%" align="center"  cellpadding="0"  cellspacing="0" class="table">
		<thead><!--cabecera-->
	   <tr>
		   <td height="25" colspan="9" valign="middle">&nbsp;<strong>Ingrese Lugar Turistico </strong>  &nbsp;&nbsp;
		     <input name="text" type="text"  id="txtBuscar" onKeyUp="fn_cronogramaturismo_buscar()" /></td>
	      </tr>
		<tr bgcolor="#009966" style="color:#FFFFFF" background="../Resources/imagenes/bg-bubplastic-h-lime.gif">
				<th width="11%" height="35" align="center"><span>Codigo</span></th>
				<th width="23%" align="left"><span>Lugar Turistico</span></th>
				<th width="13%" height="30" align="left">Ciudad</th>
				<th width="12%" ><span>Dia</span></th>
				<th width="28%"><span>Hora Salida - Hora Llegada </span></th>
				<th width="28%">Precio</th>
				<th width="4%"  align="center"> <img src="../Resources/imagenes/s_partialtext.png" width="50" height="19" /></th>
		  </tr>
		</thead>
	</table>
</div>
<div id="listado"><?php include('cronograma_turistico_resultado.php'); ?></div>