<?php
// Imprime la línea de separación
echo "----------------------------------------------\n";
// Imprime el encabezado del semáforo
echo "*****************SEMAFORO*********************\n";
// Imprime las opciones de colores
echo "Elija un color \n";
echo "\033[31mRojo (R)\n";
echo "\033[33mAmarillo (A)\n";
echo "\033[32mVerde (V)\n\033[0m";
echo "Ingrese su Color:";
// Lee la entrada del usuario
$letra = fgetc(STDIN);
$mensaje = ""; // Inicializa la variable mensaje

// Utiliza un switch para determinar el mensaje según el color ingresado
switch (strtoupper($letra)) { // Convierte la letra a mayúsculas para comparar
    case "R":
        $mensaje = "\033[31mPare!\033[0m"; // Mensaje para el color rojo
        break;
    case "A":
        $mensaje = "\033[33mEspera!\033[0m"; // Mensaje para el color amarillo
        break;
    case "V":
        $mensaje = "\033[32mAvanza!\033[0m"; // Mensaje para el color verde
        break;
    default:
        // Mensaje por defecto si se ingresa un color no válido
        $mensaje = "Color no válido. Por favor, ingrese R, A, o V.";
        break;
}

echo $mensaje; // Imprime el mensaje correspondiente
?>
