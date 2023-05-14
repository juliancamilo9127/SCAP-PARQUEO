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
$fecha = $_POST['fecha'];
$descripcion = $_POST['descripcion'];
$tipo = $_POST['tipo'];


// Crear la consulta SQL para insertar los datos
$sql = "INSERT INTO novedades (fecha, descripcion, tipo) VALUES ('$fecha', '$descripcion', '$tipo')";

// Ejecutar la consulta SQL
if ($conn->query($sql) === TRUE) {
    echo "Datos guardados correctamente.";
} else {
    echo "Error al guardar los datos: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
