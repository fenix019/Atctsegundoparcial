<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    $errors = [];

    // Validar correo electrónico
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "El correo electrónico no es válido.";
    }

    // Validar contraseña
    if (strlen($password) < 8) {
        $errors[] = "La contraseña debe tener al menos 8 caracteres.";
    }

    // Confirmar contraseña
    if ($password !== $confirmPassword) {
        $errors[] = "Las contraseñas no coinciden.";
    }

    if (empty($errors)) {
        echo "Registro exitoso.";
    } else {
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    }
}
?>
