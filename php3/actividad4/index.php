<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Votación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h2>Formulario de Votación</h2>
            </div>
            <div class="card-body">
                <form id="votacionForm" action="form.php" method="post" novalidate>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre de la persona:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑüÜ\s]+" required>
                        <div class="invalid-feedback">Por favor, ingrese un nombre válido.</div>
                    </div>
                    <div class="mb-3">
                        <label for="edad" class="form-label">Edad:</label>
                        <input type="number" class="form-control" id="edad" name="edad" min="1" max="99" required>
                        <div class="invalid-feedback">Por favor, ingrese una edad válida (1-99).</div>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var form = document.getElementById('votacionForm');

            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }

                form.classList.add('was-validated');
            }, false);
        }, false);
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
