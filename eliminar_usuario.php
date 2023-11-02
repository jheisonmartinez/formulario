<?php
include("conexion.php");
if (isset($_POST['id'])) {

    // Obtén el ID del usuario a eliminar desde la solicitud POST
    $id = $_POST['id'];
    $conn = conectarBaseDeDatos();
    // Prepara y ejecuta una consulta de eliminación
    $sql = "DELETE FROM usuarios WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    if ($stmt->execute()) {
        echo "success"; // La eliminación fue exitosa
        
    } else {
        echo "success"; // La eliminación fue exitosa
    }
} else {
    echo "error"; // No se proporcionó un ID válido
}
?>
