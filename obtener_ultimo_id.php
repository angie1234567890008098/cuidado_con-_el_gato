<?php
include 'configuracion.php';

$sql = "SELECT MAX(id) as id FROM datos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo json_encode($row);
} else {
    echo json_encode(['id' => 'No hay registros']);
}

$conn->close();
?>
