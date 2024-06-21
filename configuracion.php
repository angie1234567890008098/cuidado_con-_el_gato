<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "tienda";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Chequear conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
