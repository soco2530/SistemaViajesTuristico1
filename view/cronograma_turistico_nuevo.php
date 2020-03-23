<?php require_once('validar.php'); 
include_once ('../BussinessLogic/clsCronogramaTuristicoBL.php');
$lista=  clsCronogramaTuristicoBL::cboDiaSemana_Listar();
$lugar=  clsCronogramaTuristicoBL::cboLugarTuristico_Listar();
?>
<form action="" method="post"  name="frmcronograma_turistico" id="frmcronograma_turistico">
  <table width="100%" border="0" align="center">
    <tr>
      <td height="20" colspan="3" align="center" valign="middle"><h3><strong>REGISTRO DE CRONOGRAMA TURISTICO </strong> </h3></td>
    </tr>
    <tr>
      <td height="30" colspan="3" align="center" valign="top"  ><div id="mensaje" class="textomensaje">Campos con (*) son obligatorios </div></td>
    </tr>
    <tr>
      <td width="30%" align="right"> Lugar Turistico </td>
      <td width="2%">&nbsp;</td>
      <td width="68%">
        <select name="LugarTuristico" id="LugarTuristico"  class="cajas">
           <?php foreach($lugar as $lugar_turistico): ?>
        <option value="<?php echo $lugar_turistico["IdLugarTuristico"]?>"><?php echo $lugar_turistico["LugarTuristico"]?></option>
        <?php endforeach;?>
      </select>
        *
      <input name="accion" type="hidden" id="accion" value="INSERTAR_CRONOGRAMA_TURISTICO" /></td></tr>
    <tr>
      <td align="right">Dia</td>
      <td>&nbsp;</td>
      <td><select name="DiaSemana" id="DiaSemana" class="cajas">
        <?php foreach($lista as $diaSemana): ?>
        <option value="<?php echo $diaSemana["IdDiaSemana"]?>"><?php echo $diaSemana["DiaSemana"]?></option>
        <?php endforeach;?>
      </select></td>
    </tr>
    <tr>
      <td align="right">Hora Salida </td>
      <td>&nbsp;</td>
      <td><input name="HoraSalida" type="text" class="cajas" id="HoraSalida"  size="15" maxlength="8" />
      *</td>
    </tr>
    
    <tr>
      <td align="right">Hora Llegada </td>
      <td>&nbsp;</td>
      <td><input name="HoraLlegada" type="text" class="cajas" id="HoraLlegada"  size="15" maxlength="8" /></td>
    </tr>
    <tr>
      <td align="right">Precio</td>
      <td>&nbsp;</td>
      <td><input name="Precio" type="text" class="cajas" id="Precio"  size="10" maxlength="4" /></td>
    </tr>
    
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td height="40"><input type="button" name="Submit" value="Registrar Cronograma Turistico"  onClick="fn_cronogramaturistico_nuevo();" /></td>
    </tr>
  </table>
</form>

