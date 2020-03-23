<?php require_once('validar.php'); ?>
<div >&nbsp;Ingrese Apellidos y Nombres 
  <input type="text"  id="txtBuscar" onkeyup="fn_persona_buscar()" /></div><br/>
<div id="listado"><?php include('persona_buscar_resultado.php'); ?></div>