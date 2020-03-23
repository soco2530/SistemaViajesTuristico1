<?php    require_once('validar.php'); 
include_once ('../BussinessLogic/clsCronogramaTuristicoBL.php');
$lugar=  clsCronogramaTuristicoBL::cboLugarTuristico_Listar();
include_once ('../BussinessLogic/clsUsuarioBL.php');
$lista= clsUsuarioBL::cboPersona_Listar();

?>
<form action="" method="post"  name="frmreservacion_turistico" id="frmreservacion_turistico">
  <table width="100%" border="0" align="center">
    <tr>
      <td height="20" colspan="3" align="center" valign="middle"><h3><strong>REGISTRO DE RESERVACION TURISTICO </strong> </h3></td>
    </tr>
    <tr>
      <td height="30" colspan="3" align="center" valign="top"  ><div id="mensaje" class="textomensaje">Campos con (*) son obligatorios </div></td>
    </tr>
    <tr>
      <td width="30%" align="right">Fecha Reservacion </td>
      <td width="2%">&nbsp;</td>
      <td width="68%"><input name="FechaReservacion" type="text" class="cajas" id="FechaReservacion" size="15" maxlength="10" />
      *
      <input name="accion" type="hidden" id="accion" value="INSER" /> 
      a&ntilde;o-mes-dia </td>
    </tr>
    <tr>
      <td align="right">Hora Reservacion </td>
      <td>&nbsp;</td>
      <td><input name="HoraReservacion" type="text" class="cajas" id="HoraReservacion"  size="15" maxlength="8" />
      *</td>
    </tr>
    
    <tr>
      <td align="right">Persona</td>
      <td>&nbsp;</td>
      <td><select name="Persona" id="Persona" class="cajas">
        <?php foreach($lista as $persona): ?>
        <option value="<?php echo $persona["IdPersona"]?>"><?php echo $persona["Persona"]?></option>
        <?php endforeach;?>
      </select>
      *</td>
    </tr>
    <tr>
      <td align="right">Monto</td>
      <td>&nbsp;</td>
      <td><input name="Monto" type="text" id="Monto">
      *</td>
    </tr>
    <tr>
      <td align="right">Lugar Turistico </td>
      <td>&nbsp;</td>
      <td><select name="LugarTuristico" id="LugarTuristico"  class="cajas">
        <?php foreach($lugar as $lugar_turistico): ?>
        <option value="<?php echo $lugar_turistico["IdLugarTuristico"]?>"><?php echo $lugar_turistico["LugarTuristico"]?></option>
        <?php endforeach;?>
      </select>
      *</td>
    </tr>
    
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td height="40"><input type="button" name="Submit" value="Registrar Reservacion"  onClick="fn_reservacionturistico_nuevo();" /></td>
    </tr>
  </table>
</form>

