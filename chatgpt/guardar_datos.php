<?php
// Establecer la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chat";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Obtener los datos del formulario
$documentos = $_POST['documentos'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$fecha = $_POST['fecha'];

// Preparar la consulta SQL
$sql = "INSERT INTO tabla_de_contactos(documentos, nombre, telefono, fecha)
VALUES ('$documentos', '$nombre', '$telefono', '$fecha')";

// Ejecutar la consulta SQL
if (mysqli_query($conn, $sql)) {
    echo "Los datos se han guardado correctamente.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);
?>