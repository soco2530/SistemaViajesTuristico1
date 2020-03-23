<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="Resources/css/plantilla.css" rel="stylesheet" type="text/css">
        <script  language="javascript" type="text/javascript" src="Resources/js/jquery-1.8.2.js"></script>
	<script language="javascript" type="text/javascript" src="Resources/js/funciones.js"></script>
    <link href="Resources/css/menu.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="principal">
            <div id="header">
                  <a href="index.php"> <div id="logo"></div></a>
				  <div id="es_logan"></div>
				  <div id="menu"><?php
					  @session_start();
					  if(@$_SESSION['usuario'])
					  {    if(@$_SESSION['TipoUsuario']=="Cliente")
						    { include('menuinterno.php');  }
						   else
						   {   echo "<script language=Javascript>
		            			  location.href='view/admin.php';
				                </script>";
                           }   
					  }
					  else
					  {include('menupublico.php');  }
 			          ?>
			      </div>
            </div>
            <div id="context">
			      <div id="slider_context">
				     <div id="slider_menu"> 
					     <div id='cssmenu'>
							<ul>
							   <li class='active '><a href='index.php'><span>Home</span></a></li>
							   <li><a onClick="navegador('nosotros.html')"><span>Nosotros</span></a></li>
							   <li><a onClick="navegador('servicios.php')"><span>Lugares Turisticos</span></a></li>
							   <li><a onClick="navegador('contactanos.html')"><span>Contactanos</span></a></li>
							 
							</ul>
						 </div>
					</div>
					 <div id="slider_movimiento">
					 	<?php include('lugares.php'); ?>
					 </div>  
				</div>      
				  <div id="information">
				      <div id="center" style="margin:2% 5% 0% 5%; width:90%">
					    <div  class="information"><p style="font-size:20px">&nbsp;Visitamos <br/></p>
						    <p><br/>
						  xzxzxzxzxzxzxzxzxzxz</p>
						    <p>xzxzxzxzx</p>
					    </div>
						  <div  class="information"><p style="font-size:20px">&nbsp;Top <br/></p>
						    <p><br/>
						  xzxzxzxzxzxzxzxzxzxz</p>
						    <p>xzxzxzxzx</p></div>
						  <div  class="information"><p style="font-size:20px">&nbsp;Videos Tours <br/></p>
						    <p><br/>
						  xzxzxzxzxzxzxzxzxzxz</p>
						    <p>xzxzxzxzx</p></div>
					  </div>
				  </div>
				  
			</div>
			<div id="clear" style="float:left; width:100%; border-bottom:solid 1px #999999">
			</div>
		  <div id="footer">
			  <div style="color: darkgreen; font-weight: bold; font-size: 14px;text-align:center;">Copyright @ 2013 UCV Sistemas, J.C.R <br/>
    jcastillorro@hotmail.com</div>
		  </div>
	</div>	
    </body>
</html>
