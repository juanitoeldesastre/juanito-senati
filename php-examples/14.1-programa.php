<?php
    include("14-herencia.php");

    echo "EJEMPLO DE HERENCIA CON ANIMALES\n";

    $perro = new Perro("Coimita","Verde",false,"barking.mp3");
    
    echo $perro->obtenerInformacion()."\n";
    echo $perro->hacerSonido("Guauu");
?>