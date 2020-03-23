<?php
@session_start();
if (@$_SESSION['usuario'])
 {
	   if (@$_SESSION['TipoUsuario']=="Cliente")
        {
         echo "<script language=Javascript>
		           alert('Acceso Denegado');
				   location.href='../index.php';
				 </script>";
		 exit;
		}
	 }
else
{
       echo "<script language=Javascript>
		           alert('Acceso Denegado');
				   location.href='../index.php';
				 </script>";
		 exit;
}
?>