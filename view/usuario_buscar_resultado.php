<?php 
require_once('validar.php'); 
include_once ('../BussinessLogic/clsUsuarioBL.php');
$datoBuscar=@$_GET["txtBuscar"];
$lista=  clsUsuarioBL::Usuario_Listar($datoBuscar);
if(count($lista)==0)
   exit;
?>
<table width="100%" align="center"  cellpadding="0"  cellspacing="0" class="table">
    <thead><!--cabecera-->
        <tr bgcolor="#009966" style="color:#FFFFFF" background="../Resources/imagenes/bg-bubplastic-h-lime.gif">
            <th height="30" align="center"><span>Codigo</span></th>
            <th align="left"><span>Persona</span></th>
            <th align="left"><span> Usuario </span></th>
            <th align="left">Tipo Usuario </th>
            <th colspan="3" align="center"> <img src="../Resources/imagenes/s_partialtext.png" width="50" height="19" /></th>
      </tr>
    </thead>
    <tbody>
       <?php
        for($i = 0; $i < count($lista); $i++)
         {    $IdPersona=$lista[$i]->getIdPersona();
              $Activo=$lista[$i]->getActivoU();
              	if($i%2==0)
                        {$clase="fila2";}
		else 
                        {$clase="fila1"; }
        ?>
        <tr class="<?php echo $clase; ?>" onMouseOver="this.className='sombra'" onMouseOut="this.className='<?php echo $clase; ?>'">
                <td align="center"><?php echo $IdPersona ?></td>
                <td>&nbsp;<?php echo $lista[$i]->getApellidos(); ?><?php echo $lista[$i]->getNombres(); ?></td>
                <td>&nbsp;<?php echo $lista[$i]->getLogin(); ?></td>
                <td>&nbsp;<?php echo $lista[$i]->getTipoUsuario(); ?></td>
                <?php 
                   if($Activo)
	        {?>
		    <td align="center" valign="middle">
		     <a onclick="fn_usuario_anular(<?php echo $IdPersona ?>);" 
                        style="text-decoration:underline;cursor:pointer;" >
			   <img src="../Resources/imagenes/usuario_anular.png"  title="Desactivar Usuario" width="30" height="25" border="0" />				 </a></td>
               
                    <td align="center" valign="middle">
                        <a onclick="fn_usuario_cambiarclave(<?php echo $IdPersona ?>);" 
                           style="text-decoration:underline;cursor:pointer;"  >
			<img src="../Resources/imagenes/usuario_nuevo.png" width="25" height="25" border="0"  title="Cambiar Clave" />					</a></td> 	
                 <?php  }  
		   else { ?> 
		     <td colspan="2"  align="center" valign="middle">
		     <a  onclick="fn_usuario_activar(<?php echo $IdPersona ?>);" 
		     style="text-decoration:underline;cursor:pointer;"  title="Activar Usuario" >
		     <img src="../Resources/imagenes/persona_activar.png" alt=" Activar Usuario" width="30" height="25" border="0" />					</a>				</td>
	         <?php  } ?>
      </tr>
          <?php
            }
           ?>
  </tbody>
     <tfoot>
        <tr>
            <td></td>
            <td height="40" colspan="5" align="right"><h4 style="color:#00CC33"><strong><?php echo count($lista); ?></strong> Registros encontrados&nbsp;&nbsp;&nbsp;</h4></td>
            <td></td>
        </tr> <!--Pie tabla-->
    </tfoot>
</table>
