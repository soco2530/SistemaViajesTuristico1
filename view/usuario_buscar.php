<?php require_once('validar.php'); ?>
<div >&nbsp;Ingrese Apellidos y Nombres 
  <input type="text"  id="txtBuscar" onkeyup="fn_usuario_buscar()" /></div><br/>
<div id="listado"><?php include('usuario_buscar_resultado.php'); ?></div>