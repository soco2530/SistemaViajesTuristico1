<?php    require_once('validar.php'); ?>
<form action="" method="post" name="frmpersona" id="frmpersona">
  <table width="100%" border="0" align="center">
    <tr>
      <td height="20" colspan="3" align="center" valign="middle"><h3><strong>REGISTRO DE PERSONAS</strong> </h3></td>
    </tr>
    <tr>
      <td height="30" colspan="3" align="center" valign="top"  ><div id="mensaje" class="textomensaje">Campos con (*) son obligatorios </div></td>
    </tr>
    <tr>
      <td width="30%" align="right">Apellidos</td>
      <td width="2%">&nbsp;</td>
      <td width="68%"><input name="Apellidos" class="cajas" type="text" id="Apellidos" size="50" maxlength="40" />
      *
      <input name="accion" type="hidden" id="accion" value="INST_PERSONA" />
      <input name="Rnd" type="hidden" id="Rnd" /></td>
    </tr>
    <tr>
      <td align="right">Nombres</td>
      <td>&nbsp;</td>
      <td><input name="Nombres" type="text" class="cajas" id="Nombres"  size="50" maxlength="50" />
      *</td>
    </tr>
    <tr>
      <td align="right">Dni</td>
      <td>&nbsp;</td>
      <td><input name="Dni" type="text" id="Dni" class="cajas"  size="11" maxlength="8" />
      *</td>
    </tr>
    <tr>
      <td align="right">Sexo</td>
      <td>&nbsp;</td>
      <td><select name="Sexo" id="Sexo" class="cajas" >
        <option value="MASCULINO">MASCULINO</option>
        <option value="FEMENINO">FEMENINO</option>
      </select>
      *      </td>
    </tr>
    <tr>
      <td align="right">Fecha Nacimiento </td>
      <td>&nbsp;</td>
      <td><input name="FechaNacimiento" type="text" class="cajas" id="FechaNacimiento"  size="15" maxlength="10" />
      * a&ntilde;o-mes-dia </td>
    </tr>
    
    <tr>
      <td align="right">Direccion</td>
      <td>&nbsp;</td>
      <td><input name="Direccion" type="text" class="cajas" id="Direccion"  size="50" maxlength="150" />
      *</td>
    </tr>
    <tr>
      <td align="right">Telefono</td>
      <td>&nbsp;</td>
      <td><input name="Telefono" type="text" class="cajas" id="Telefono"  size="15" maxlength="11" /></td>
    </tr>
    <tr>
      <td align="right">Celular</td>
      <td>&nbsp;</td>
      <td><input name="Celular" type="text" class="cajas" id="Celular"  size="15" maxlength="11" /></td>
    </tr>
    <tr>
      <td align="right">Email</td>
      <td>&nbsp;</td>
      <td><input name="Email" type="text" class="cajas" id="Email" size="50" maxlength="60"  /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td height="40"><input type="button" name="Submit" value="Registrar Persona"  onClick="fn_persona_nueva();" /></td>
    </tr>
  </table>
</form>
