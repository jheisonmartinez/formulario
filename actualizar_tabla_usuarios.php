<?php
// Este archivo se encarga de generar la tabla de usuarios actualizada
// Puedes personalizar esta consulta SQL según tu estructura de base de datos

include("conexion.php");

// Consulta SQL para obtener la tabla de usuarios actualizada
$sql = "SELECT id, usuario FROM usuarios";
$conn = conectarBaseDeDatos();
$stmt = $conn->prepare($sql);
$stmt->execute();
?>

<table class="table table-bordered">
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
