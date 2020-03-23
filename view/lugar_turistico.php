<?php require_once('validar.php'); ?>
<div style="width:96%; margin:0% 2% 0% 2%;">
  	<h2><strong>Mantenimiento -> Lugares Turisticos </strong></h2>
  	<hr noshade="noshade">
	<div> &nbsp;
	     <a onClick="link_navegador('lugar_turistico_buscar.php')"  style="cursor:pointer" >
	    		 <img src="../Resources/imagenes/buscar.png" width="30" height="25" border="0" align="absmiddle" />
				 Busqueda de Lugares Turisticos		 </a>&nbsp;| &nbsp;
		 <a onClick="link_navegador('lugar_turistico_nuevo.php')"  style="cursor:pointer;">
	             <img src="../Resources/imagenes/agregar.png" width="30" height="25" border="0" align="absmiddle" />
				 Nuevo Lugar Turistico		 </a>	</div>
	<hr noshade="noshade">
	
  <div id="cargando" align="center" style="height:10px;z-index:2;"><br/>
	    <br />  <br />  <br />  <br />
    <img src="../Resources/imagenes/loading_b.gif" align="absmiddle" height="50px" width="50px" alt=""/> &nbsp;&nbsp;<strong>Cargando </strong></div>

	 <div id="formulario"><script>link_navegador('lugar_turistico_buscar.php');</script></div>
</div><br/>
