<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Montaña Rusa - Validador</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Formulario de Validación para la Montaña Rusa</h2>
        <form id="validatorForm" action="validaciones.php" method="POST" onsubmit="return validateForm();">
            <div class="form-group">
                <label for="height">Altura (en cm):</label>
                <input type="number" class="form-control" id="height" name="height" placeholder="ingresa tu edad en cm" required>
                <div class="invalid-feedback" id="heightError"></div>
            </div>
            <div class="form-group">
                <label for="age">Edad:</label>
                <input type="number" class="form-control" id="age" name="age" placeholder="ingresa tu edad" required>
                <div class="invalid-feedback" id="ageError"></div>
            </div>
            <div class="form-group">
                <label>¿Rechaza llevarnos a juicio por daños y perjuicios de un mal mantenimiento?</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="liability" id="liabilityYes" value="yes" required>
                    <label class="form-check-label" for="liabilityYes">Sí</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="liability" id="liabilityNo" value="no" required>
                    <label class="form-check-label" for="liabilityNo">No</label>
                </div>
                <div class="invalid-feedback" id="liabilityError"></div>
            </div>
            <button type="submit" class="btn btn-primary">Validar</button>
        </form>
        <div id="ticket" class="mt-5"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="funciones.js"></script>
</body>
</html>
