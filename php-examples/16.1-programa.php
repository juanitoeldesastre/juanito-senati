<?php

    include("16-encamsulamiento.php");
    
    
    $guitarra = new instrumento("gibson","acustica");
    $guitarra->modelos="nylon , alambre";
    echo "Dtaos de Guitarra\n";
    echo "nombre : ".$guitarra->nombre."\n";
    echo "categoria :".$guitarra->categoria;
    echo "modelos :".$guitarra->mostrarModelos();

    $guitarra->nombre ="yamaha";
    $guitarra->categoria ="electrica";
    $guitarra->setearModelos("nylon , alambre , otros")
    echo "\nDatos de Guitarra\n";
    echo "nombre : ".$guitarra->nombre."\n";
    echo "categoria :".$guitarra->categoria."\n";
    echo "modelos :".$guitarra->mostrarModelos();
    echo "tienes cuerdas ? :".$guitarra->validarCuerdas();
?>