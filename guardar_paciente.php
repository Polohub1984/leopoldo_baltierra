<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("db.php");

// Capturar los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$identificacion = $_POST['identificacion'];
$sexo = $_POST['sexo'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$motivo = $_POST['motivo'];

// Insertar en la base de datos
$sql = "INSERT INTO pacientes (nombre, apellido, identificacion, sexo, direccion, telefono, correo, motivo)
        VALUES ('$nombre', '$apellido', '$identificacion', '$sexo', '$direccion', '$telefono', '$correo', '$motivo')";

if ($conn->query($sql) === TRUE) {
    echo "Paciente registrado correctamente.";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>