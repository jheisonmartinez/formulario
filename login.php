<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
    <!-- Agrega los enlaces a las hojas de estilo de Bootstrap 5 -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Iniciar Sesión</h2>
                        <form action="procesar_login.php" method="post">
                            <div class="mb-3">
                                <label for="usuario" class="form-label">Usuario:</label>
                                <input type="text" id="usuario" name="usuario" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="contrasena" class="form-label">Contraseña:</label>
                                <input type="password" id="contrasena" name="contrasena" class="form-control" >
                            </div>
                            <div class="d-grid">
                                <input type="submit" value="Iniciar Sesión" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
