<?php
include("12-clase.php");

echo "******* BIENVENIDO A CALCULADORA *******\n";
echo "******* MENU DE OPCIONES *******\n";
echo "******* SUMAR (OPCION 1) *******\n";
echo "******* RESTAR (OPCION 2) *******\n";
echo "******* MULTIPLICAR (OPCION 3) *******\n";
echo "******* DIVIDIR (OPCION 4) *******\n";
echo "******* POTENCIA (OPCION 5) *******\n";
echo "******* RAIZ (OPCION 6) *******\n";
echo "******* SALIR (OPCION 7) *******\n";
echo "INGRESE LA OPCION:\n";

$opcion = trim(fgets(STDIN)); // trim para eliminar cualquier espacio en blanco extra

function leerNumero($prompt) {
    echo $prompt;
    return (float) trim(fgets(STDIN));
}

switch ($opcion) {
    case 1:
        $num1 = leerNumero("ESCRIBA EL PRIMER NUMERO: ");
        $num2 = leerNumero("ESCRIBA EL SEGUNDO NUMERO: ");
        $calculadora = new Calculadora($num1, $num2);
        echo "Resultado de la suma: " . $calculadora->sumar() . "\n";
        break;
    case 2:
        $num1 = leerNumero("ESCRIBA EL PRIMER NUMERO: ");
        $num2 = leerNumero("ESCRIBA EL SEGUNDO NUMERO: ");
        $calculadora = new Calculadora($num1, $num2);
        echo "Resultado de la resta: " . $calculadora->restar() . "\n";
        break;
    case 3:
        $num1 = leerNumero("ESCRIBA EL PRIMER NUMERO: ");
        $num2 = leerNumero("ESCRIBA EL SEGUNDO NUMERO: ");
        $calculadora = new Calculadora($num1, $num2);
        echo "Resultado de la multiplicación: " . $calculadora->multiplicar() . "\n";
        break;
    case 4:
        $num1 = leerNumero("ESCRIBA EL PRIMER NUMERO: ");
        $num2 = leerNumero("ESCRIBA EL SEGUNDO NUMERO: ");
        $calculadora = new Calculadora($num1, $num2);
        echo "Resultado de la división: " . $calculadora->dividir() . "\n";
        break;
    case 5:
        $num1 = leerNumero("ESCRIBA EL PRIMER NUMERO: ");
        $num2 = leerNumero("ESCRIBA EL SEGUNDO NUMERO: ");
        $calculadora = new Calculadora($num1, $num2);
        echo "Resultado de la potencia: " . $calculadora->potencia() . "\n";
        break;
    case 6:
        $num1 = leerNumero("ESCRIBA EL NUMERO: ");
        $calculadora = new Calculadora($num1, 0); // Solo se necesita el primer número para la raíz
        echo "Resultado de la raíz cuadrada: " . $calculadora->raiz() . "\n";
        break;
    case 0:
        echo "Gracias por usar la calculadora. ¡Adiós!\n";
        exit();
    default:
        echo "Opción no válida. Por favor, ingrese una opción del 1 al 7.\n";
        break;
}
?>
