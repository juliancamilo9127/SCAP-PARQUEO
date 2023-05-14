<?php
$servername = "localhost";
$username = "root";
$password = "Unad2023";
$database = "parking";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar si hay algún error en la conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Obtener los datos del formulario

$placa = $_POST['placa'];


// Escapar el valor para evitar inyección de SQL
$placa = $conn->real_escape_string($placa);

// Ejecutar la consulta SQL DELETE
$sql = "DELETE FROM usuarios WHERE placa = '$placa'";

if ($conn->query($sql) === TRUE) {
    echo "Registro eliminado correctamente.";
} else {
    echo "Error al eliminar el registro: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
