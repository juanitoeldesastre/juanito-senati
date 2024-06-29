<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="php.ico">
    <title>Variables</title>
    <style>
        :root {
            color-scheme: light dark;
        }
        body {
            display: grid;
            place-content: center;
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 100px;
        }
        h1 {
            font-size: 1.5em;
        }
        p {
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <?php
    $nombres = "Juan Piero";
    $apellidos = "Vincha Loza";
    $edad = 18; 
    $curso = "Backend Developer Web";
    $semestre = "tercer semestre";
    $universidad = "Universidad Nacional de Ingeniería";
    $ciudad = "Lima";
    $pais = "Perú";
    $hobbies = ["programar", "leer", "jugar videojuegos"];
    
    $nuevaedad = $edad + 1;
    $fechaNacimiento = date("Y") - $edad;

    // Crear mensaje completo
    $mensajeCompleto = "Hola, $nombres $apellidos. Tienes $nuevaedad años, estás en el curso de $curso y vas en el $semestre. 
                        Estudias en la $universidad ubicada en $ciudad, $pais. Tus hobbies son: " . implode(", ", $hobbies) . ". Naciste en el año $fechaNacimiento.";
    ?>
    <h1><?= $mensajeCompleto; ?></h1>
</body>
</html>
