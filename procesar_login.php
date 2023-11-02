<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    $dsn = "mysql:host=localhost;dbname=formdb";
    $usuario_db = "root";
    $contrasena_db = "";

    try {
        $pdo = new PDO($dsn, $usuario_db, $contrasena_db);
    } catch (PDOException $e) {
        die("Error de conexión a la base de datos: " . $e->getMessage());
    }

    $query = "SELECT id, contrasena FROM usuarios WHERE usuario = :usuario";
    $stmt = $pdo->prepare($query);
    $stmt->execute(array(':usuario' => $nombre_usuario));
    $row = $stmt->fetch();

    if ($row && password_verify($contrasena, $row['contrasena'])) {
        $_SESSION["nombre_usuario"] = $nombre_usuario;

        // Depuración: muestra un mensaje de éxito
        echo "Inicio de sesión exitoso.";

        header("Location: inicio.php");
        exit();
    } else {
        // Depuración: muestra un mensaje de error
        echo "Credenciales incorrectas. Inténtalo de nuevo.";
    }
}
?>


