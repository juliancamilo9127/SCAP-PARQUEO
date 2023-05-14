<?php
// Establecer la conexión a la base de datos
$server = 'localhost';
$database = 'parking';
$username = 'root';
$password = 'Unad2023';

$conn = new mysqli($server, $username, $password, $database);

// Verificar si hay algún error en la conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Obtener los datos del formulario
$usuarios = $_POST['usuarios'];
$nombre = $_POST['nombre'];
$password = $_POST['password'];
$permiso = $_POST['permiso'];

// Crear la consulta SQL para insertar los datos
$sql = "INSERT INTO personas (usuarios, nombre, password, permiso) VALUES ('$usuarios', '$nombre', '$password', '$permiso')";

// Ejecutar la consulta SQL
if ($conn->query($sql) === TRUE) {
    echo "Datos guardados correctamente.";
} else {
    echo "Error al guardar los datos: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
