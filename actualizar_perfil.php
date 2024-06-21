<?php
include 'configuracion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = $_POST["userId"];
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];
    $dc = $_POST["dc"];
    $aps = $_POST["aps"];
    $telefono = $_POST["telefono"]; 

    $sql = "UPDATE datos SET nombre='$nombre', correo='$correo', contraseña='$contrasena', dc='$dc', aps='$aps', telefono='$telefono' WHERE id='$userId'";

    if ($conn->query($sql) === TRUE) {
        echo "Los datos se han actualizado correctamente";
    } else {
        echo "Error al actualizar los datos: " . $conn->error;
    }
}

$conn->close();
?>