<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Formulario de Registro</h2>
        <form action="validaciones.php" method="post" id="registrationForm">
            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" required>
                <div class="invalid-feedback">
                    Por favor, introduce un correo electrónico válido.
                </div>
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="password" name="password" pattern=".{8,}" required>
                    <div class="input-group-append">
                        <span class="input-group-text" id="togglePassword">
                            <i class="fa fa-eye"></i>
                        </span>
                    </div>
                </div>
                <div class="invalid-feedback" id="passwordError">
                    La contraseña debe tener al menos 8 caracteres.
                </div>
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirmar Contraseña</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" pattern=".{8,}" required>
                    <div class="input-group-append">
                        <span class="input-group-text" id="toggleConfirmPassword">
                            <i class="fa fa-eye"></i>
                        </span>
                    </div>
                </div>
                <div class="invalid-feedback" id="confirmPasswordError">
                    Las contraseñas no coinciden.
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Registrarse</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="scripts.js"></script>
</body>
</html>
