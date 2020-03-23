<?php require_once('validar.php'); ?>
<div >
	 <table  width="100%" align="center"  cellpadding="0"  cellspacing="0" class="table">
		<thead><!--cabecera-->
	   <tr>
		   <td height="25" colspan="4" valign="middle">&nbsp;<strong>Ingrese Lugar Turistico </strong>  &nbsp;&nbsp;
		     <input name="text" type="text"  id="txtBuscar" onkeyup="fn_lugarturismo_buscar()" /></td>
	       <td height="25" align="right" valign="middle"><b>Registros a Mostrar</b> </td>
	       <td height="25" valign="middle">&nbsp;</td>
	       <td height="25" valign="middle"><select name="cboRegistro" id="cboRegistro" onchange="fn_lugarturismo_buscar();">
	         <option value="20" selected="selected">20</option>
	         <option value="50">50</option>
	         <option value="75">75</option>
	         <option value="100">100</option>
			 <option value="150">150</option>
			 <option value="250">250</option>
			 <option value="500">500</option>
			 <option value="750">750</option>
			 <option value="1000">1000</option>
			 <option value="1250">1250</option>
			 <option value="15000">1500</option>
	         </select>
	       </td>
	       <td height="25" valign="middle">&nbsp;</td>
	   </tr>
		<tr bgcolor="#009966" style="color:#FFFFFF" background="../Resources/imagenes/bg-bubplastic-h-lime.gif">
				<th width="11%" height="35" align="center"><span>Codigo</span></th>
				<th width="23%" align="left"><span>Lugar Turistico</span></th>
				<th width="13%" height="30" align="left"><span>Ciudad</span></th>
				<th width="12%" ><span>Imagen</span></th>
				<th width="28%"><span>Ubicacion</span></th>
				<th width="13%" colspan="3" align="center"> <img src="../Resources/imagenes/s_partialtext.png" width="50" height="19" /></th>
		  </tr>
		</thead>
	</table>
</div>
<div id="listado"><?php include('lugar_turistico_resultado.php'); ?></div>
