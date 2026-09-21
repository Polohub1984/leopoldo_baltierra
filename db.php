<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "localhost";
$usuario = "root";
$clave = ""; // En Laragon normalmente no se usa contraseña
$base_datos = "clinica_bienestar";

$conn = mysqli_connect($host, $usuario, $clave, $base_datos);

if (!$conn) {
    die("❌ Error al conectar con la base de datos: " . mysqli_connect_error());
} else {
    echo "✅ Conexión exitosa a la base de datos clinica_bienestar";
}
?>