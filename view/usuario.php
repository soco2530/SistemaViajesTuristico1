<?php  
 require_once('validar.php'); 
/*echo '<script language="javascript" src="../Resources/js/ajax_usuario.js" type="text/javascript"></script>';*/
?>
<div style="width:96%; margin:0% 2% 0% 2%;">
  <h2><strong>Administracion -> Usuarios</strong></h2>
  <hr noshade="noshade">
<div> &nbsp;<a onClick="subnavegador_menu('usuario_buscar.php')"  style="cursor:pointer" ><img src="../Resources/imagenes/usuario_buscar.png" width="30" height="25" border="0" align="absmiddle" />Busqueda de Usuarios </a>&nbsp;| &nbsp;<a onClick="subnavegador_menu('usuario_nuevo.php')"  style="cursor:pointer;"> <img src="../Resources/imagenes/usuario_agregar.png" width="30" height="25" border="0" align="absmiddle" />Nueva Usuario</a></div>
<hr noshade="noshade">
<div id="formulario"><script>subnavegador_menu('usuario_buscar.php');</script></div>
</div><br/>