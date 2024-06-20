<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $decimal = intval($_POST["decimal"]);
    $conversion = $_POST["conversion"];
    
    function decimalABinario($decimal) {
        return decbin($decimal);
    }

    function decimalAOctal($decimal) {
        return decoct($decimal);
    }

    function decimalAHexadecimal($decimal) {
        return dechex($decimal);
    }

    $resultado = "";
    
    switch ($conversion) {
        case "binario":
            $resultado = decimalABinario($decimal);
            break;
        case "octal":
            $resultado = decimalAOctal($decimal);
            break;
        case "hexadecimal":
            $resultado = decimalAHexadecimal($decimal);
            break;
        default:
            $resultado = "Opción de conversión no válida.";
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la Conversión</title>
</head>
<body>
    <h1>Resultado de la Conversión</h1>
    <?php if (!empty($resultado)): ?>
        <p>El número decimal <?= htmlspecialchars($decimal) ?> en <?= htmlspecialchars($conversion) ?> es: <?= htmlspecialchars($resultado) ?></p>
    <?php else: ?>
        <p>No se pudo realizar la conversión.</p>
    <?php endif; ?>
    <a href="./index.html">Volver</a>
</body>
</html>
