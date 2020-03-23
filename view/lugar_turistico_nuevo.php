<?php    require_once('validar.php'); ?>
<form action="" method="post"  name="frmlugar_turistico" id="frmlugar_turistico">
  <table width="100%" border="0" align="center">
    <tr>
      <td height="20" colspan="3" align="center" valign="middle"><h3><strong>REGISTRO DE LUGAR TURISTICO </strong> </h3></td>
    </tr>
    <tr>
      <td height="30" colspan="3" align="center" valign="top"  ><div id="mensaje" class="textomensaje">Campos con (*) son obligatorios </div></td>
    </tr>
    <tr>
      <td width="30%" align="right">Nombre Lugar Turistico </td>
      <td width="2%">&nbsp;</td>
      <td width="68%"><input name="LugarTuristico" class="cajas" type="text" id="LugarTuristico" size="50" maxlength="40" />
      *
      <input name="accion" type="hidden" id="accion" value="INSERTAR_LUGAR_TURISTICO" /></td>
    </tr>
    <tr>
      <td align="right">Ciudad</td>
      <td>&nbsp;</td>
      <td><input name="Ciudad" type="text" class="cajas" id="Ciudad"  size="50" maxlength="50" />
      *</td>
    </tr>
    
    <tr>
      <td align="right">Ubicacion</td>
      <td>&nbsp;</td>
      <td><textarea name="Ubicacion" cols="34" id="Ubicacion"></textarea>
        *</td>
    </tr>
    
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td height="40"><input type="button" name="Submit" value="Registrar Lugar Turistico"  onClick="fn_lugarturistico_nuevo();" /></td>
    </tr>
  </table>
</form>

