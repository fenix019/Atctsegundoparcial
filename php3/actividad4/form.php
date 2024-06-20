<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $edad = htmlspecialchars($_POST['edad']);

    $puedeVotar = ($edad >= 18) ? "Sí, puede votar." : "No, no puede votar.";

    echo "<!DOCTYPE html>
    <html lang='es'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Resultado del Formulario</title>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
        <link rel='stylesheet' href='estilos.css'>
    </head>
    <body>
        <div class='container mt-5'>
            <div class='card'>
                <div class='card-header'>
                    <h2>Resultado del Formulario</h2>
                </div>
                <div class='card-body'>
                    <p><strong>Nombre:</strong> $nombre</p>
                    <p><strong>Edad:</strong> $edad</p>
                    <p><strong>Puede votar:</strong> $puedeVotar</p>
                    <a href='index.php' class='btn btn-primary'>Volver</a>
                </div>
            </div>
        </div>
    </body>
    </html>";
} else {
    header("Location: index.php");
    exit();
}
?>
