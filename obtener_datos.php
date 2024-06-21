<?php
include 'configuracion.php';

// Verifica si se ha enviado un ID de usuario
if (isset($_POST['userId'])) {
    $userId = $_POST['userId'];

    // Consulta para obtener los datos del usuario
    $sql = "SELECT * FROM datos WHERE id = $userId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Datos encontrados, enviar respuesta JSON con los datos
        $row = $result->fetch_assoc();
        echo json_encode($row);
    } else {
        // No se encontraron datos para el ID proporcionado
        echo "No se encontraron datos para el ID proporcionado.";
    }
} else {
    // No se proporcionó un ID de usuario
    echo "No se proporcionó un ID de usuario.";
}

$conn->close();
?>

