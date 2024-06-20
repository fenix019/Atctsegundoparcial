<?php
function showMenu() {
    echo "Seleccione la conversión que desea realizar:\n";
    echo "1. Decimal a Binario\n";
    echo "2. Decimal a Octal\n";
    echo "3. Decimal a Hexadecimal\n";
    echo "4. Salir\n";
    echo "Ingrese su elección: ";
}

function decimalToBinary($decimal) {
    return decbin($decimal);
}

function decimalToOctal($decimal) {
    return decoct($decimal);
}

function decimalToHexadecimal($decimal) {
    return dechex($decimal);
}

do {
    showMenu();
    $choice = intval(trim(fgets(STDIN)));
    
    if ($choice >= 1 && $choice <= 3) {
        echo "Ingrese el número decimal: ";
        $decimal = intval(trim(fgets(STDIN)));
        
        switch ($choice) {
            case 1:
                echo "El equivalente en binario es: " . decimalToBinary($decimal) . "\n";
                break;
            case 2:
                echo "El equivalente en octal es: " . decimalToOctal($decimal) . "\n";
                break;
            case 3:
                echo "El equivalente en hexadecimal es: " . decimalToHexadecimal($decimal) . "\n";
                break;
        }
    } elseif ($choice == 4) {
        echo "Saliendo del programa...\n";
    } else {
        echo "Opción no válida. Por favor, intente de nuevo.\n";
    }
    
} while ($choice != 4);
?>
