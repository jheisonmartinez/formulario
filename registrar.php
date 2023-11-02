<?php

$servername = "localhost"; // Reemplaza con el nombre de tu servidor MySQL
$username = "root"; // Reemplaza con tu nombre de usuario de MySQL
$password = ""; // Reemplaza con tu contraseña de MySQL
$dbname = "formdb"; // Nombre de la base de datos
$table = "usuarios"; // Nombre de la tabla



// Crear una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Recuperar datos del formulario HTML
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$verificacion_contrasena = $_POST['verificacion-contrasena'];

// Validar que las contraseñas coincidan
if ($contrasena !== $verificacion_contrasena) {
    echo "Las contraseñas no coinciden.";
    exit;
}

// Verificar si el usuario ya existe
$existe_usuario = false;
$check_sql = "SELECT id FROM $table WHERE usuario = '$usuario'";
$result_check = $conn->query($check_sql);
if ($result_check->num_rows > 0) {
    $existe_usuario = true;
}

if ($existe_usuario) {
    echo "El usuario ya existe en la base de datos.";
    exit;
}

// Encriptar la contraseña
$contrasena_encriptada = password_hash($contrasena, PASSWORD_BCRYPT);

// Insertar los datos en la tabla usuarios
$sql = "INSERT INTO $table (usuario, contrasena) VALUES ('$usuario', '$contrasena_encriptada')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso. Puedes cerrar esta página.";
    header("Location: inicio.php");
} else {
    echo "Error al registrar: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
