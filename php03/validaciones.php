<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Validación</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $height = $_POST['height'];
            $age = $_POST['age'];
            $liability = $_POST['liability'];

            $errors = [];

            if ($height <= 120) {
                $errors[] = "La altura debe ser superior a 120 cm.";
            }

            if ($age <= 16 || $age >= 80) {
                $errors[] = "La edad debe ser mayor a 16 años y menor a 80 años.";
            }

            if (empty($liability)) {
                $errors[] = "Debe elegir una opción para la responsabilidad.";
            }

            if (empty($errors)) {
                echo '<div class="alert alert-success">Todo es válido. Aquí está su ticket.</div>';
                echo '<img src="tiket.png" alt="Ticket" class="img-fluid">';
                echo '<br><a href="index.php" class="btn btn-primary mt-3">Tomar Ticket</a>';
            } else {
                foreach ($errors as $error) {
                    echo '<div class="alert alert-danger">' . $error . '</div>';
                }
                echo '<br><a href="index.php" class="btn btn-primary mt-3">Regresar</a>';
            }
        }
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
