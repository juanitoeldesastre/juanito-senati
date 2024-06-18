<?php

function leerNumeroEntero($mensaje) {
    while (true) {
        echo $mensaje;
        $entrada = trim(fgets(STDIN));
        if (is_numeric($entrada) && strpos($entrada, '.') === false) {
            return (int)$entrada;
        } else {
            echo "Por favor, ingrese un número entero válido.\n";
        }
    }
}

$edadEstudiante1 = leerNumeroEntero("Ingrese su edad: ");
$edadEstudiante2 = 21;

if ($edadEstudiante1 > $edadEstudiante2) {
    echo "El estudiante N° 01 es mayor que el estudiante N° 02\n";
} elseif ($edadEstudiante1 == $edadEstudiante2) {
    echo "El estudiante N° 01 tiene la misma edad que el estudiante N° 02\n";
} else {
    echo "El estudiante N° 02 es mayor que el estudiante N° 01\n";
}

$notaValida = false;
while (!$notaValida) {
    echo "Ingrese su Nota Final: ";
    $notafinal = trim(fgets(STDIN));

    if (is_numeric($notafinal)) {
        $notafinal = (float)$notafinal;
        $notaValida = true;
    } else {
        echo "Por favor, ingrese un número válido.\n";
    }
}

if ($notafinal < 10.5) {
    echo "Usted está desaprobado\n";
} elseif ($notafinal == 10.5) {
    echo "Usted está aprobado a las justas\n";
} elseif ($notafinal > 10.5 && $notafinal <= 15) {
    echo "Usted está aprobado de forma regular\n";
} else {
    echo "Usted está muy bien aprobado\n";
}

?>
