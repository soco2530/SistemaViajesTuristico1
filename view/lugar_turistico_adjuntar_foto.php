<?php require_once('validar.php'); 
include_once ('../DataAccessLogic/clsConexionDAL.php');
$cn=clsConexionDAL::getConectarse();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Adjuntar Imagen</title>
    </head>
    <body onLoad="setTimeout('window.close()',120000)">
			 <form  method="post" enctype="multipart/form-data" action="lugar_turistico_adjuntar_foto.php?id=<?php echo $_REQUEST['id'];?>">
			   <table width="330" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
				  <tr bgcolor="#FFFFCC" >
					<th height="35" colspan="3"   scope="col"><div align="center">ADJUNTAR IMAGEN LUGAR TURISTICO </div></th>
			     </tr>
				  <tr>
						<td width="32" align="center" valign="top" bgcolor="#FFFFCC">&nbsp;</td>
						<td align="center" valign="top"><?php  
						$sql="select IdLugarTuristico,Imagen from LugarTuristico where IdLugarTuristico='".@$_REQUEST['id']."'";
						$result=mysql_query($sql,$cn)or die(mysql_error('No se pudo ejecutar la consulta'));
						$registro=mysql_fetch_assoc($result);?>
						<img src="../Resources/FotosLugarTuristico/<?php echo $registro['Imagen']; ?>" width="100%" height="150" border="0"  align="middle" />           </td>
						<td width="32" align="center"valign="top" bgcolor="#FFFFCC">&nbsp;</td>
				  </tr>
				  <tr>
					<td height="25" bgcolor="#FFFFCC"><span class="links"><strong>Foto</strong></span></td>
					<td><input name="foto" type="file" class="textocolumna" id="foto" size="20" /></td>
					<td valign="top" bgcolor="#FFFFCC"></td>
				  </tr>
				  <tr bgcolor="#FFFFCC">
					<td height="25" colspan="3" align="center" valign="top"><input name="enviar" type="submit" class="sombra" id="enviar" value="Guardar Foto" /></td>
			</tr>
				  <tr>
					<td height="30" colspan="3" align="center" valign="middle" bgcolor="#FFFFCC">
				<?php
				 $postback = (isset($_POST["enviar"])) ? true : false;
				 if($postback)
				 {  error_reporting(E_ALL);
					$mimetypes = array("image/jpeg", "image/pjpeg", "image/gif", "image/png");
		 
					$name = $_FILES["foto"]["name"];
					$type = $_FILES["foto"]["type"];
					$tmp_name = $_FILES["foto"]["tmp_name"];
					$destino = '../Resources/FotosLugarTuristico';
					if(!in_array($type, $mimetypes))
					  { echo "<div class=links align=center><marquee>EL Archivo subido no es un formato valido</marquee></div>";}
					else
					  {			
						$sql="update LugarTuristico set Imagen='$name' where IdLugarTuristico='".@$_REQUEST['id']."'";
						$result=mysql_query($sql,$cn);	
						 if (!$result )
							{echo "<div class=links align=center>
								<marquee>No se Puedo Adjuntar la Imagen del Lugar Turistico</marquee>
							</div>";
							}
						 else
						 
						{    unlink($destino.'/'.$registro['Imagen']);		
						   echo "<div class=links align=center>
								la Imagen del Producto se guardo excitosamente
														 </div>";
						   sleep(2);
							echo "<script>
								location.href='lugar_turistico_adjuntar_foto.php?id=".$_REQUEST['id']."';
							  </script>";
							move_uploaded_file($tmp_name, "$destino/$name");
						  
						 
						}
					}
				 }
				?>	 </td>
			</tr>
				  <tr>
					<td height="100%" colspan="3" align="center" valign="middle">           </td>
				  </tr>
		  </table>
			  
		  
		</form>
</body>
</html>
