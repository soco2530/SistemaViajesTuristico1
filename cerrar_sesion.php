<?php
 @session_start();
 session_destroy();
 unset($_SESSION['IdPersona']);
 unset($_SESSION['usuario']);
 unset($_SESSION['Apellidos']);
 unset($_SESSION['Nombres']);
  echo "<script language=javascript>
            location.href='index.php';
	   </script>"
?>