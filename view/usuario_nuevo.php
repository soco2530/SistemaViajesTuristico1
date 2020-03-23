<?php 
require_once('validar.php'); 
include_once ('../BussinessLogic/clsUsuarioBL.php');
$lista= clsUsuarioBL::cboPersona_Listar();
?>
<form id="frmusuario" name="frmusuario"  >
  <table width="90%" border="0" align="center" bgcolor="#FFFFFF" style="margin:auto">
    <tr>
      <td height="20" colspan="3" align="center" valign="top"><h3 style="color:#666666"><strong>REGISTRO DE USUARIOS </strong></h3></td>
    </tr>
    <tr>
      <td height="40" colspan="3" align="center" valign="top" class="letra"><div class="textomensaje" id="mensaje"> Todos los campos con ( * ) son Obligatorios </div></td>
    </tr>
    
    <tr>
      <td align="right">Persona:</td>
      <td align="left">  
	   <select name="Persona" id="Persona" class="cajas">
	       <?php foreach($lista as $persona): ?>
	      <option value="<?php echo $persona["IdPersona"]?>"><?php echo $persona["Persona"]?></option>       
           	<?php endforeach;?>
	  </select>
      <input name="accion" type="hidden" id="accion" value="NUEVO_USUARIO" /> 
      *      </td>
      <td width="40%" rowspan="6" align="left" valign="top"><img src="../Resources/imagenes/usuario.jpg" width="231" height="200" /></td>
    </tr>
    <tr>
      <td width="26%" align="right" class="letra">Usuario: </td>
      <td width="34%" align="left"><input name="Usuario" type="text" class="usuario" id="Usuario" size="35" />
          <strong>*</strong></td>
    </tr>
    <tr>
      <td align="right">Contrase&ntilde;a:</td>
      <td align="left"><input name="Clave" type="password" class="clave" id="Clave" size="25" />
      <span><strong>*</strong></span></td>
    </tr>
    <tr>
      <td align="right">Tipo Usuario </td>
      <td align="left"><select name="TipoUsuario" id="TipoUsuario" class="cajas">
        <option value="Cliente">Cliente</option>
        <option value="Personal">Personal</option>
      </select>      </td>
    </tr>
    <tr>
      <td height="63">&nbsp;</td>
      <td>&nbsp;&nbsp;<img src="../Resources/imagenes/entrar.png" width="131" style="cursor:pointer" height="44"  onclick="fn_usuario_nuevo();"/></td>
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
