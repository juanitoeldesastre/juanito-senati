<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="php.ico">
    <title>Cadenas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden; 
        }
        .container {
            max-width: 800px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: auto; /* Permite el desplazamiento dentro del contenedor si es necesario */
            max-height: 100%; /* Asegura que el contenedor no se extienda más allá de la ventana */
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .section {
            margin-bottom: 20px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 20px;
        }
        .section h2 {
            color: #666;
        }
        .result {
            font-size: 20px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Manipulación de Cadenas en PHP</h1>
        
        <div class="section">
            <h2>Conversión de Cadenas</h2>
            <?php
            $cadena = "El curso ha terminado";
            $mayusculas = strtoupper($cadena);
            $minusculas = strtolower($cadena);
            ?>
            <p class="result">Texto original: "<?php echo $cadena; ?>"</p>
            <p class="result">Texto en mayúsculas: "<?php echo $mayusculas; ?>"</p>
            <p class="result">Texto en minúsculas: "<?php echo $minusculas; ?>"</p>
        </div>
        
        <div class="section">
            <h2>Información de la Cadena</h2>
            <?php
            $longitud = strlen($cadena);
            $palabras = str_word_count($cadena);
            ?>
            <p class="result">Longitud de la cadena: <?php echo $longitud; ?> caracteres</p>
            <p class="result">Número de palabras: <?php echo $palabras; ?></p>
        </div>
        
        <div class="section">
            <h2>Modificación de Cadenas</h2>
            <?php
            $cadena_modificada = str_replace("terminado", "finalizado", $cadena);
            ?>
            <p class="result">Texto modificado: "<?php echo $cadena_modificada; ?>"</p>
        </div>
        
        <div class="section">
            <h2>Manipulación Avanzada</h2>
            <?php
            $invertida = strrev($cadena);
            $subcadena = substr($cadena, 3, 9);
            ?>
            <p class="result">Texto invertido: "<?php echo $invertida; ?>"</p>
            <p class="result">Subcadena (desde el carácter 4, longitud 9): "<?php echo $subcadena; ?>"</p>
        </div>
    </div>
</body>
</html>
