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

// Consulta para obtener el último ID de usuario
$sql = "SELECT MAX(id) AS ultimoId FROM datos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $ultimoId = $row["ultimoId"];
    echo json_encode(array("ultimoId" => $ultimoId));
} else {
    echo json_encode(array("ultimoId" => null)); // En caso de que no haya registros
}

$conn->close();
?>
