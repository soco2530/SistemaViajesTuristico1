<?php 
require_once('validar.php'); 
include_once ('../BussinessLogic/clsLugarTuristicoBL.php');
if(isset($_GET['pagina'])){
    $pagina=$_GET['pagina'];
	
}else{
    $pagina=1;
	
}
if(isset($_GET['registro'])){
    $registros=$_GET['registro'];
	
}else{
   $registros=20;
	
}

$datoBuscar=@$_GET["txtBuscar"];
$lista=  clsLugarTuristicoBL::Listar_LugarTuristico($datoBuscar,$pagina,$registros);
if(count($lista)==0)
   exit;
?>
<table width="100%" border="0" align="center"  cellpadding="0"  cellspacing="0" class="table">
      <tbody>
       <?php
        for($i = 0; $i < count($lista); $i++)
         {    $IdLugarTuristico=$lista[$i]->getIdLugarTuristico();
              $Activo=$lista[$i]->getActivo();
              	if($i%2==0)
                        {$clase="fila2";}
		else 
                        {$clase="fila1"; }
        ?>
        <tr class="<?php echo $clase; ?>" onMouseOver="this.className='sombra'" onMouseOut="this.className='<?php echo $clase; ?>'">
                <td width="6%" height="25" align="center"><?php echo $IdLugarTuristico ?></td>
                <td width="19%">&nbsp;<?php echo $lista[$i]->getLugarTuristico(); ?></td>
                <td width="18%">&nbsp;<?php echo $lista[$i]->getCiudad(); ?></td>
                <td width="10%" align="center">&nbsp;
											<?php 
				                             if($lista[$i]->getImagen())
											 {
											 ?>
				                             <img src="../Resources/FotosLugarTuristico/<?php echo $lista[$i]->getImagen(); ?>" width=50 height=50 border=0  align=middle />
				                             <?php
											 }else{
											 ?>
											 <img src="../Resources/FotosLugarTuristico/sinfoto.png" width="50" height="50" border="0"  align="middle" />
				                            <?php } ?>	             </td>
                <td width="27%" align="left">&nbsp;<?php echo $lista[$i]->getUbicacion(); ?></td>
                 <?php 
                   if($Activo)
	        {?>
		    <td width="3%" align="center" valign="middle">
		     <a onclick="window.open('lugar_turistico_adjuntar_foto.php?id=<?php echo $IdLugarTuristico; ?>','','resizable=no,scrollbars=no,status=no, toolbar=no,directories=no,menubar=no width=330px,height=300px')" 
                        style="text-decoration:underline;cursor:pointer;">
			   <img src="../Resources/imagenes/picture.png" width="20" height="20" border="0"  title="Adjuntar Imagen" />				 </a></td>
              <td width="5%" align="center">  <a onclick="fn_lugarturistico_anular(<?php echo $IdLugarTuristico ?>);" 
                        style="text-decoration:underline;cursor:pointer;" >
			   <img src="../Resources/imagenes/eliminar.png" width="20" height="20" border="0"  title="Anular Lugar Turistico" />				 </a>                </td>
				
               
                    <td width="3%" align="center" valign="middle">
                        <a 
                           style="text-decoration:underline;cursor:pointer;"  >
			<img src="../Resources/imagenes/editar.png" width="20" height="20" border="0"  title="Modificar Lugar Turistico" />					</a></td> 	
                 <?php  }  
		   else { ?> 
		     <td width="9%" colspan="3"  align="center" valign="middle">
		     <a  onclick="fn_lugarturistico_activar(<?php echo $IdLugarTuristico ?>);" 
		     style="text-decoration:underline;cursor:pointer;"  title="Activar Lugar Turistico" >
		     <img src="../Resources/imagenes/actualizar.png" alt=" Activar Lugar Turistico" width="20" height="20" border="0" />					</a>				</td>
	         <?php  } ?>
      </tr>
          <?php
            }
           ?>
  </tbody>
     <tfoot>
        <tr>
            <td  colspan="4"><?php echo clsLugarTuristicoBL::paginacion($datoBuscar, $pagina,$registros) ;?></td>
            <td height="40" colspan="5" align="right"><h4 style="color:#00CC33"><strong><?php echo count($lista); ?></strong> Registros encontrados&nbsp;&nbsp;&nbsp;</h4></td>
        </tr> <!--Pie tabla-->
    </tfoot>
</table>
