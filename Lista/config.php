<!-- config.php -->
<?php
$usuario  = "root";
$password = "";
$servidor = "localhost";
$basededatos = "project";
$con = mysqli_connect($servidor, $usuario, $password, $basededatos) or die("No se ha podido conectar al Servidor");
?>