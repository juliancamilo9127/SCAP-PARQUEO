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
$nombre = $_POST['nombre'];
$placa = $_POST['placa'];
$apartamento = $_POST['apartamento'];
$modelo = $_POST['modelo'];

// Crear la consulta SQL para insertar los datos
$sql = "INSERT INTO usuarios (nombre, placa, apartamento, modelo) VALUES ('$nombre', '$placa', '$apartamento', '$modelo')";

// Ejecutar la consulta SQL
if ($conn->query($sql) === TRUE) {
    echo "Datos guardados correctamente.";
} else {
    echo "Error al guardar los datos: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
