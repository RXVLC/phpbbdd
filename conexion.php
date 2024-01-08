<?php
$servidor = "localhost"; // Cambia esto si tu servidor de MySQL está en otro lugar
$usuario = "root";
$contrasena = "";
$base_datos = "phpPrueba"; // Nombre de tu base de datos

$conexion = new mysqli($servidor, $usuario, $contrasena, $base_datos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
