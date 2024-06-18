<?php  

function leerNumero($mensaje) {
    while (true) {
        echo $mensaje;
        $entrada = fgets(STDIN);
        $entrada = trim($entrada);
        if (is_numeric($entrada)) {
            return $entrada;
        } else {
            echo "Por favor, ingrese un número.\n";
        }
    }
}

$contador = 1;
$sumanotas = 0;

while ($contador <= 3) {        
    $nota = leerNumero("Ingrese su Nota: ");
    $sumanotas = $sumanotas + $nota;
    $contador++; 
}

$notapromedio = $sumanotas / 3;
echo "El promedio de notas es: " . $notapromedio . "\n";

$mayor = 0;

for ($i = 1; $i <= 5; $i++) {
    $numero = leerNumero("Ingrese un número: ");
    if ($mayor < $numero) {
        $mayor = $numero;
    }
}

echo "El número mayor es: " . $mayor . "\n";

?>
