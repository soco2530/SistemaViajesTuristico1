<?php 
 require_once('validar.php');
 include_once ('../BussinessLogic/clsPersonaBL.php');
$IdPersona=@$_GET["IdPersona"];
$lista=clsPersonaBL::Editar_Persona($IdPersona);
 ?>
<form action="" method="post" name="frmpersona" id="frmpersona">
  <table width="100%" border="0" align="center">
    <tr>
      <td height="20" colspan="3" align="center" valign="middle"><h3><strong>MODIFICAR INFORMACION DE LA PERSONA</strong> </h3></td>
    </tr>
    <tr>
      <td height="30" colspan="3" align="center" valign="top"  ><div id="mensaje" class="textomensaje">Campos con (*) son obligatorios </div></td>
    </tr>
    <tr>
      <td width="30%" align="right">Apellidos</td>
      <td width="2%">&nbsp;</td>
      <td width="68%"><input name="Apellidos" type="text" id="Apellidos" class="cajas" value="<?php echo $lista[0]->getApellidos(); ?>" size="50" maxlength="40" />
      *
        <input name="accion" type="hidden" id="accion" value="EDIT_PERSONA" />
      <input name="IdPersona" type="hidden" id="IdPersona" value="<?php echo $lista[0]->getIdPersona(); ?>" /></td>
    </tr>
    <tr>
      <td align="right">Nombres</td>
      <td>&nbsp;</td>
      <td><input name="Nombres" type="text" class="cajas" id="Nombres" value="<?php echo $lista[0]->getNombres(); ?>"  size="50" maxlength="50" />
      *</td>
    </tr>
    <tr>
      <td align="right">Dni</td>
      <td>&nbsp;</td>
      <td><input name="Dni" type="text" id="Dni" class="cajas"  size="11" maxlength="8" value="<?php  echo $lista[0]->getDni(); ?>" />
      *</td>
    </tr>
    <tr>
      <td align="right">Sexo</td>
      <td>&nbsp;</td>
      <td>
	  <select name="Sexo" id="Sexo" class="cajas" >
        <?php
		   if(strtoupper($lista[0]->getSexo())=="MASCULINO"){
		      echo '<option value="MASCULINO" selected="selected">MASCULINO</option>
                    <option value="FEMENINO">FEMENINO</option>';}
		  else{
		      echo '<option value="MASCULINO">MASCULINO</option>
                   <option value="FEMENINO" selected="selected">FEMENINO</option>';
		  }
		?>
	</select>
      *      </td>
    </tr>
    <tr>
      <td align="right">Fecha Nacimiento </td>
      <td>&nbsp;</td>
      <td><input name="FechaNacimiento" type="text" class="cajas" id="FechaNacimiento" value="<?php echo $lista[0]->getFechaNacimiento(); ?>"  size="15" maxlength="10" />
      * a&ntilde;o-mes-dia </td>
    </tr>
    
    <tr>
      <td align="right">Direccion</td>
      <td>&nbsp;</td>
      <td><input name="Direccion" type="text" class="cajas" id="Direccion"  size="50" value="<?php echo $lista[0]->getDireccion(); ?>" maxlength="150" />
      *</td>
    </tr>
    <tr>
      <td align="right">Telefono</td>
      <td>&nbsp;</td>
      <td><input name="Telefono" type="text" class="cajas" id="Telefono"  size="15" maxlength="11" value="<?php echo $lista[0]->getTelefono(); ?>" /></td>
    </tr>
    <tr>
      <td align="right">Celular</td>
      <td>&nbsp;</td>
      <td><input name="Celular" type="text" class="cajas" id="Celular"  size="15" maxlength="11" value="<?php echo $lista[0]->getCelular(); ?>" /></td>
    </tr>
    <tr>
      <td align="right">Email</td>
      <td>&nbsp;</td>
      <td><input name="Email" type="text" class="cajas" id="Email" size="50" maxlength="60" value="<?php echo $lista[0]->getEmail(); ?>" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td height="40"><input type="button" name="Submit" value="Modifcar Persona"  onClick="fn_persona_nueva();" /></td>
    </tr>
  </table>
</form>
