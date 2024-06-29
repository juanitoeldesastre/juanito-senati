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
}

h1 {
    font-size: 20px;
}
</style>

<body>
<?php
    $nombres = "Juan Piero";
    $apellidos = "Vincha Loza";
    $edad = 18; 
    $curso = "Backend Developer Web";
    $semestre = "tercer semestre";
    
    $nuevaedad = $edad + 1;

    // Crear mensaje
    $mensaje = "Hola, $nombres $apellidos. Tienes $nuevaedad años, estás en el curso de $curso y vas en el $semestre.";
    ?>
    <h1><?= $mensaje; ?></h1>
</body>