<form id="frmnuevo_usuario" name="frmnuevo_usuario"  >
            <table width="90%" border="0" align="center" bgcolor="#FFFFFF" style="margin:auto">
              <tr>
                <td height="40" colspan="3" valign="top" class="letra"><h1 style="color:#666666">Acceso de usuarios </h1>
                <hr noshade="noshade" />&nbsp;</td>
              </tr>
              <tr>
                <td height="40" colspan="3" align="center" valign="middle" class="letra"><div class="textomensaje" id="mensajelogin"> Todos los campos con ( * ) son Obligatorios </div></td>
              </tr>
              
              <tr>
                <td align="right" class="letra">&nbsp;</td>
                <td align="left">&nbsp;</td>
                <td width="47%" rowspan="5" align="left"><img src="Resources/imagenes/usuario.jpg" width="231" height="200" /></td>
              </tr>
              <tr>
                <td width="29%" align="right" class="letra">Usuario: </td>
                <td width="24%" align="left"><input name="txtUsuario" type="text" class="usuario" id="txtUsuario" size="35" />
                <strong class="textocolumna">*</strong></td>
              </tr>
              <tr>
                <td align="right" class="letra">Contrase&ntilde;a: </td>
                <td align="left"><input name="txtClave" type="password" class="clave" id="txtClave" size="25" />
                  <span class="textocolumna"><strong>*</strong></span></td>
              </tr>
              
              <tr>
                <td height="63">&nbsp;</td>
                <td>&nbsp;&nbsp;<img src="Resources/imagenes/entrar.png" width="131" style="cursor:pointer" height="44"  onclick="iniciar_sesion();"/></td>
              </tr>
              <tr>
                <td height="63">&nbsp;</td>
                <td align="left">&nbsp;</td>
              </tr>
              <tr>
                <td height="40">&nbsp;</td>
                <td align="left">&nbsp;</td>
                <td align="left">&nbsp;</td>
              </tr>
  </table>
</form>