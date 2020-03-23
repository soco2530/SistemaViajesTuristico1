<table width="100%" height="25" border="0" align="center" style="font-size: 14px;font-weight: 600">
                <tr>
                    <td width="83" align="right" valign="top">Bienvenido : </td>
                    <td colspan="2" align="left" valign="top" style="color:darkgreen"><?php echo $_SESSION['Apellidos']?> &nbsp;<?php echo $_SESSION['Nombres']?></td>
                   
                  <td width="197" valign="top">Usuario: <img src="Resources/imagenes/usu.png" width="25" height="20" border="0" align="absmiddle"><span style="color:darkgreen"><?php echo strtoupper($_SESSION['usuario']); ?></span></td>
                    <td width="122" valign="top"><a href="cerrar_sesion.php" style="cursor: pointer;text-decoration: none;"><img src="Resources/imagenes/cerrar.png" width="15" height="15" border="0" align="absbottom"/> Cerrar Sesion </a></td>
                </tr>
            </table>