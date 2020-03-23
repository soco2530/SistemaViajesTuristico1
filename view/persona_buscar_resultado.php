<?php 
require_once('validar.php'); 
include_once ('../BussinessLogic/clsPersonaBL.php');

if(isset($_GET['pagina'])){
    $pagina=$_GET['pagina'];
}else{
        $pagina=1;
}
$datoBuscar=@$_GET["txtBuscar"];
$lista=clsPersonaBL::Listar_Persona($datoBuscar,$pagina);
if(count($lista)==0)
   exit;
?>
<table width="100%" align="center"  cellpadding="0"  cellspacing="0" class="table">
    <thead><!--cabecera-->
        <tr bgcolor="#009966" style="color:#FFFFFF" background="../Resources/imagenes/bg-bubplastic-h-lime.gif">
            <th align="center"><span>Codigo</span></th>
            <th><span>Apellidos</span></th>
            <th height="30"><span>Nombres</span></th>
            <th ><span>Dni</span></th>
            <th><span>Sexo</span></th>
            <th><span>Fecha Nac </span></th>
            <th><span>Direccion</span></th>
            <th colspan="3" align="center"> <img src="../Resources/imagenes/s_partialtext.png" width="50" height="19" /></th>
      </tr>
    </thead>
    <tbody>
       <?php
        for($i = 0; $i < count($lista); $i++)
         {    $IdPersona=$lista[$i]->getIdPersona();
              $Activo=$lista[$i]->getActivo();
              	if($i%2==0)
                        {$clase="fila2";}
		else 
                        {$clase="fila1"; }
        ?>
        <tr class="<?php echo $clase; ?>" onMouseOver="this.className='sombra'" onMouseOut="this.className='<?php echo $clase; ?>'">
                <td align="center"><?php echo $IdPersona ?></td>
                <td>&nbsp;<?php echo $lista[$i]->getApellidos(); ?></td>
                <td>&nbsp;<?php echo $lista[$i]->getNombres(); ?></td>
                <td align="center">&nbsp;<?php echo $lista[$i]->getDni(); ?></td>
                <td align="center">&nbsp;<?php echo $lista[$i]->getSexo(); ?></td>
                <td>&nbsp;<?php echo $lista[$i]->getFechaNacimiento(); ?></td>
                <td>&nbsp;<?php echo $lista[$i]->getDireccion(); ?></td>
                <?php 
                   if($Activo)
	        {?>
		    <td align="center" valign="middle">
		     <a onclick="fn_persona_anular(<?php echo $IdPersona ?>);" 
                        style="text-decoration:underline;cursor:pointer;" >
			   <img src="../Resources/imagenes/persona_anular.png"  title="Desactivar Persona" width="20" height="20" border="0" />				 </a></td>
               
                    <td align="center" valign="middle">
                        <a onclick="fn_persona_editar(<?php echo $IdPersona ?>);" 
                           style="text-decoration:underline;cursor:pointer;"  >
			<img src="../Resources/imagenes/persona_editar.png" width="20" height="20" border="0"  title="Modificar Persona" />					</a></td> 	
                 <?php  }  
		   else { ?> 
		     <td colspan="2"  align="center" valign="middle">
		     <a  onclick="fn_persona_activar(<?php echo $IdPersona ?>);" 
		     style="text-decoration:underline;cursor:pointer;"  title="Activar Persona" >
		     <img src="../Resources/imagenes/persona_activar.png" alt=" Activar Persona" width="20" height="20" border="0" />					</a>				</td>
	         <?php  } ?>
      </tr>
          <?php
            }
           ?>
  </tbody>
     <tfoot>
        <tr>
            <td  colspan="6"><?php echo clsPersonaBL::paginacion($datoBuscar, $pagina) ?></td>
            <td height="40" colspan="4" align="right"><h4 style="color:#00CC33"><strong><?php echo count($lista); ?></strong> Registros encontrados&nbsp;&nbsp;&nbsp;</h4></td>
        
        </tr> <!--Pie tabla-->
    </tfoot>
</table>
