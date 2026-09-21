<?php
include("db.php");

// Obtener los valores enviados desde el formulario
$usuario = strtoupper($_POST['usuario']); // Convertimos a mayúsculas
$clave = strtolower($_POST['clave']); // Convertimos a minúsculas

// Guardar en la base de datos
$sql = "INSERT INTO usuarios (usuario, clave) VALUES ('$usuario', '$clave')";
$conn->query($sql);

echo "Usuario registrado correctamente.";
?>