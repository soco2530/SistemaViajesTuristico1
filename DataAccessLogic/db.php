<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "turismo";

// Create connection
$cn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$cn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>