<?php
class clsConexionDAL {
  static function getConectarse()
        {
               $servername="localhost";
               $db="turismo";
               $username="root";
               $password="";
            
                $cn=mysql_connect($servername, $username, $password ) or die ("Error conectando a la base de datos");
                mysql_select_db($db ,$cn) or die("Error seleccionando la Base de datos");
                mysql_query ("SET NAMES 'utf8'");
                return $cn;
       }
}
?>
