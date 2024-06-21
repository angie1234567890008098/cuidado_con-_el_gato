<?php
include 'configuracion.php';

$response = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = $_POST["userId"];

    // Verificar si el usuario existe
    $sql_check = "SELECT * FROM datos WHERE id = $userId";
    $result_check = $conn->query($sql_check);

    if ($result_check->num_rows > 0) {
        // Eliminar el usuario
        $sql_delete = "DELETE FROM datos WHERE id = $userId";

        if ($conn->query($sql_delete) === TRUE) {
            $response['message'] = "Cuenta eliminada correctamente";
        } else {
            $response['message'] = "Error al eliminar la cuenta: " . $conn->error;
        }
    } else {
        $response['message'] = "El usuario con ID $userId no existe";
    }
}

$conn->close();
echo json_encode($response);
?>
