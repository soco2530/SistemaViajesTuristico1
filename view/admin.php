<?php  @session_start();  require_once('validar.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>USUARIO :: <?php echo strtoupper($_SESSION['usuario']); ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="../Resources/css/plantilla.css" rel="stylesheet" type="text/css">
		<link  href="../Resources/imagenes/sis.ico" type="image/x-icon" rel="shortcut icon" />
        <script  language="javascript" type="text/javascript" src="../Resources/js/jquery-1.8.2.js"></script>
	<script language="javascript" type="text/javascript" src="../Resources/js/funciones.js"></script>
    <link href="../Resources/css/menu.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="principal">
            <div id="header">
                <a href="admin.php"> <div id="logo"></div></a>
				<div id="es_logan"></div>
				<div id="menu"><table width="100%" height="25" border="0" align="center" style="font-size: 14px;font-weight: 600">
                <tr>
                    <td width="83" align="right" valign="top">Bienvenido : </td>
                    <td colspan="2" align="left" valign="top" style="color:darkgreen"><?php echo $_SESSION['Apellidos']?> &nbsp;<?php echo $_SESSION['Nombres']?></td>
                   
                  <td width="197" valign="top">Usuario: <img src="../Resources/imagenes/usu.png" width="25" height="20" border="0" align="absmiddle"><span style="color:darkgreen"><?php echo strtoupper($_SESSION['usuario']); ?></span></td>
                    <td width="122" valign="top"><a href="../cerrar_sesion.php" style="cursor: pointer;text-decoration: none;"><img src="../Resources/imagenes/cerrar.png" width="15" height="15" border="0" align="absbottom"/> Cerrar Sesion </a></td>
                </tr>
            </table></div>
            </div>
            <div id="context">
			    <!--<div >&nbsp;</div>-->
			    <div id="context-menu" style="width:21.9%; float:left; border-right:2px solid #CCCCCC; height:600px">
					    <div id='cssmenu'>
							<ul>
							   <li class='active'><a ><span><strong style="font-size:18px">Mantenimiento</strong></span></a></li>
							   <li><a  onClick="subnavegador('personas.php')" style="cursor:pointer"><span>Persona</span></a></li>
							   <li><a onClick="subnavegador('usuario.php')" style="cursor:pointer"><span>Usuarios</span></a></li>
							   <li><a onClick="subnavegador('lugar_turistico.php')" style="cursor:pointer"><span>Lugar Turistico</span></a></li>
							   <li><a onClick="subnavegador('cronograma_turistico.php')" style="cursor:pointer"><span>Cronogramas</span></a></li>
							   <li class='active'><a ><span><strong style="font-size:18px">Procesos</strong></span></a></li>
							   <li><a onClick="subnavegador('reservacion.php')" style="cursor:pointer"><span>Reservaciones</span></a></li>
							  
							 
							</ul>
						 </div>
				</div>
									 
				<div id="context_formulario" style="width:77.8%; float:left;">
				            <div align="center">
							
								<h1><br>
								  Bienvenidos usuario<br/>
							  <img src="../Resources/imagenes/usuario.jpg" width="256" height="256"></h1>
							</div>
               </div>
			   <div style="float:left; width:100%">&nbsp;</div>
			   
			  
	       </div>
		   
		  <div id="footer">
			<div style="color: darkgreen; font-weight: bold; font-size: 14px;text-align:center;">Copyright @ 2013 UCV Sistemas, J.C.R <br/>
    jcastillorro@hotmail.com</div><br/>
	   
		  </div>
	</div>	
    </body>
</html>
