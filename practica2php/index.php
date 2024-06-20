<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversión de Sistemas Numéricos</title>
</head>
<body>
    <h1>Conversión de Sistemas Numéricos</h1>
    <form action="convert.php" method="post">
        <label for="decimal">Ingrese un número decimal:</label>
        <input type="number" id="decimal" name="decimal" required>
        
        <label for="conversion">Seleccione el sistema numérico:</label>
        <select id="conversion" name="conversion" required>
            <option value="binario">Binario</option>
            <option value="octal">Octal</option>
            <option value="hexadecimal">Hexadecimal</option>
        </select>
        
        <button type="submit">Convertir</button>
    </form>
</body>
</html>
