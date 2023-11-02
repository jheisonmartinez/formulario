<?php
include("conexion.php");
include("cabecera.php");
session_start();



if (!isset($_SESSION["nombre_usuario"])) {
    header("Location: login.php");
    exit();
}

$nombre_usuario = $_SESSION["nombre_usuario"];

// Verifica si se estableció una variable de sesión
if (isset($_SESSION['mensaje'])) {
    $mensaje = $_SESSION['mensaje'];
    unset($_SESSION['mensaje']);
}

$conn = conectarBaseDeDatos();
$tabla ="usuarios";
$sql = "SELECT id, usuario FROM $tabla";
$stmt = $conn->prepare($sql);
$stmt->execute();


?>

    <div class="container mt-4">
        <!-- Primer div con formulario de registro -->
        <div class="row">
        <div class="mb-4 col-4">
            <h2>Formulario de Registro</h2>
            <form action="registrar.php" method="POST">
    <div class="mb-3">
        <label for="usuario" class="form-label">Usuario</label>
        <input type="text" class="form-control" id="usuario" name="usuario" required>
    </div>
    <div class="mb-3">
        <label for="contrasena" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="contrasena" name="contrasena" required>
    </div>
    <div class="mb-3">
        <label for="verificacion-contrasena" class="form-label">Verificación de Contraseña</label>
        <input type="password" class="form-control" id="verificacion-contrasena" name="verificacion-contrasena" required>
        <div id="error-message" class="text-danger"></div>
    </div>
    <button type="submit" class="btn btn-primary">Registrar</button>
</form>

        </div>

        <!-- Segundo div con tabla de datos -->
        <div class="mb-4 col-8">
            <h2>Usuarios Registrados</h2>
            <table class="table table-bordered" id="tabla-usuarios">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Usuario</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                   while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>
                            <td>" . $row["id"] . "</td>
                            <td>" . $row["usuario"] . "</td>";
                    echo '<td>
                            <button class="btn btn-danger" onclick="eliminarUsuario(' . $row["id"] . ')">Eliminar</button>
                            </td>
                        </tr>';
                }
                ?>
                </tbody>
            </table>
        </div>

        </div>
           
    
    <script src=./js/bootstrap.min.js></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    function eliminarUsuario(usuarioId) {
        if (confirm("¿Seguro que desea eliminar este usuario?")) {
            $.ajax({
                type: "POST",
                url: "eliminar_usuario.php",
                data: { id: usuarioId },
                success: function (response) {
                    console.log(response)
                    console.log(response = "success")
                    console.log(response == "success")
                    console.log(response === "success")
                    if (response === "success") {
                        // Actualiza la tabla de usuarios
                        $.ajax({
                            type: "GET",
                            url: "actualizar_tabla_usuarios.php",
                            success: function (data) {
                                // Reemplaza la tabla con la nueva data
                                $("#tabla-usuarios").html(data);
                                alert("Usuario eliminado exitosamente.");
                            }
                        });
                    } else {
                        alert("Error al eliminar el usuario.");
                    }
                }
            });
        }
    }
    </script>
</body>
</html>

