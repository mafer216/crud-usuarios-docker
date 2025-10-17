<?php
$host = "localhost";
$user = "root"; // tu usuario de MySQL
$pass = ""; // tu contraseña de MySQL
$db = "crud_usuarios_db";

$conexion = mysqli_connect($host, $user, $pass, $db);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>