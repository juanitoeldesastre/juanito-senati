<?php
include("12-clase.php");

function solicitarNumero($mensaje) {
    $numero = null;
    while (!is_numeric($numero)) {
        echo $mensaje;
        $numero = trim(fgets(STDIN));
        if (!is_numeric($numero)) {
            echo "\033[31mPor favor, ingrese un número válido.\033[0m\n"; // Red color for error message
        }
    }
    return (float)$numero;
}

echo "\n\033[32m******* BIENVENIDO A MI CALCULADORA *********\033[0m\n\n"; // Yellow color for welcome message

$rpta = '1'; // Inicializando $rpta antes del bucle

echo "\033[32m******* MENÚ DE OPCIONES *********\n";
echo "1. SUMAR\n";
echo "2. RESTAR\n";
echo "3. MULTIPLICAR\n";
echo "4. DIVIDIR\n";
echo "5. POTENCIA\n";
echo "6. RAÍZ CUADRADA\n";
echo "\033[31m0. SALIR\n";
echo "\033[32m***********************************\n\n\033[0m"; 

do {
    echo "\033[33mINGRESE LA OPCIÓN: \033[0m";
    $opcion = trim(fgets(STDIN));

    if (!in_array($opcion, ['0', '1', '2', '3', '4', '5', '6'])) {
        echo "\033[31mOPCIÓN NO VÁLIDA\033[0m\n"; // Red color for error message
        continue;
    }

    if ($opcion == '0') {
        echo "\033[32mMUCHAS GRACIAS POR ESTAR AQUÍ\n\033[0m";
        break;
    }

    if ($opcion == '6') {
        $numero1 = solicitarNumero("\033[33mESCRIBA EL NÚMERO: \033[0m"); // Blue color for input message
        $calculadora = new Calculadora($numero1);
    } else {
        $numero1 = solicitarNumero("\033[33mESCRIBA EL PRIMER NÚMERO: \033[0m"); // Blue color for input message
        $numero2 = solicitarNumero("\033[33mESCRIBA EL SEGUNDO NÚMERO: \033[0m"); // Blue color for input message
        $calculadora = new Calculadora($numero1, $numero2);
    }

    switch ($opcion) {
        case '1':
            $resultado = $calculadora->sumar();
            echo "\033[32mLA SUMA ES: " . $resultado . "\033[0m\n"; // Green color for output
            break;
        case '2':
            $resultado = $calculadora->restar();
            echo "\033[32mLA RESTA ES: " . $resultado . "\033[0m\n"; // Green color for output
            break;
        case '3':
            $resultado = $calculadora->multiplicar();
            echo "\033[32mLA MULTIPLICACIÓN ES: " . $resultado . "\033[0m\n"; // Green color for output
            break;
        case '4':
            $resultado = $calculadora->dividir();
            echo "\033[32mLA DIVISIÓN ES: " . $resultado . "\033[0m\n"; // Green color for output
            break;
        case '5':
            $resultado = $calculadora->potencia();
            echo "\033[32mLA POTENCIA ES: " . $resultado . "\033[0m\n"; // Green color for output
            break;
        case '6':
            $resultado = $calculadora->raiz();
            echo "\033[32mLA RAÍZ CUADRADA ES: " . $resultado . "\033[0m\n"; // Green color for output
            break;
    }

    echo "\n\033[32m¿Desea continuar? (1=Sí / \033[31m0=No):\033[0m ";
    $rpta = trim(fgets(STDIN));

} while ($rpta == '1');
?>
