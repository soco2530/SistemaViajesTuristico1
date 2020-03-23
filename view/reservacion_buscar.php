<?php require_once('validar.php'); ?>
<div >
	 <table  width="100%" align="center"  cellpadding="0"  cellspacing="0" class="table">
		<thead><!--cabecera-->
	   <tr>
		   <td height="25" colspan="10" valign="middle">&nbsp;<strong>Ingrese  Apellidos y Nombres </strong>  &nbsp;&nbsp;
		     <input name="text" type="text"  id="txtBuscar" onKeyUp="fn_reservacion_buscar()" /></td>
	      </tr>
		<tr bgcolor="#009966" style="color:#FFFFFF" background="../Resources/imagenes/bg-bubplastic-h-lime.gif">
				<th width="9%" height="35" align="center"><span>Id</span></th>
				<th width="20%" align="left"><span>Reservado por </span></th>
				<th width="11%" height="30" align="left">Fecha</th>
				<th width="9%" ><span>Hora</span></th>
				<th width="21%">Lugar Turistico</th>
				<th width="9%">Monto</th>
				<th width="15%">Registrado</th>
				<th width="6%"  align="center"> <img src="../Resources/imagenes/s_partialtext.png" width="50" height="19" /></th>
		  </tr>
		</thead>
	</table>
</div>
<div id="listado"><?php include('reservacion_resultado.php'); ?></div>