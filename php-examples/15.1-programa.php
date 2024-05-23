<?php

include("15-polimorfismo.php");

echo "AREA DE TRIANGULO\n";
echo "INGRESE LA BASE :";
$b = (float)trim(fgets(STDIN));
echo "INGRESE LA ALTURA :";
$h = (float)trim(fgets(STDIN));
$triangulo = new Triangulo($b, $h);
$area = $triangulo->calcularArea();
echo "EL AREA DEL TRIANGULO ES " . $area . "\n";

echo "\nAREA DE RECTANGULO\n";
echo "INGRESE LA BASE :";
$b = (float)trim(fgets(STDIN));
echo "INGRESE LA ALTURA :";
$a = (float)trim(fgets(STDIN));
$rectangulo = new Rectangulo($b, $a);
$area = $rectangulo->calcularArea();
echo "EL AREA DEL RECTANGULO ES " . $area . "\n";

echo "\nAREA DE CUADRADO\n";
echo "INGRESE EL LADO :";
$l = (float)trim(fgets(STDIN));
$cuadrado = new Cuadrado($l);
$area = $cuadrado->calcularArea();
echo "EL AREA DEL CUADRADO ES " . $area . "\n";

echo "\nAREA DE CIRCULO\n";
echo "INGRESE EL RADIO :";
$r = (float)trim(fgets(STDIN));
$circulo = new Circulo($r);
$area = $circulo->calcularArea();
echo "EL AREA DEL CIRCULO ES " . $area . "\n";

?>
