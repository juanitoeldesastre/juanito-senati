<?php

function obtenerColorSemaforo($entrada) {
    switch (strtolower(trim($entrada))) {
        case '1':
        case 'r':
        case 'rojo':
            return "\033[31m¡Pare!\033[0m"; // Rojo
        case '2':
        case 'a':
        case 'amarillo':
            return "\033[33m¡Espera!\033[0m"; // Amarillo
        case '3':
        case 'v':
        case 'verde':
            return "\033[32m¡Avanza!\033[0m"; // Verde
        default:
            return "Entrada no válida. Por favor, ingrese un número (1, 2, 3) o letras correspondientes al color del semáforo.";
    }
}

echo "Ingrese un número (1: Rojo, 2: Amarillo, 3: Verde) para el color del semáforo: ";
$entrada = trim(fgets(STDIN));

$mensaje = obtenerColorSemaforo($entrada);
echo $mensaje . "\n";

?>
