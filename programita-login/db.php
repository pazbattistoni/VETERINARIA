<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'arcoiris');
define('DB_NAME', 'validar');

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die("Error al conectarse");
?>