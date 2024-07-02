<link rel="icon" href="php.ico">
<title>Variables</title>
<style>
:root {
    color-scheme: light dark;
}

body {
    padding: 100px;
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
    $edad = 20;
    $estatura = 1.80;
    $dinero = 200;
    $carrera = "Ingeniería de Software";
    $semestre = "tercer semestre";
    $intereses = array("romance", "control mental", "meditación", "creepypastas");
    $viudo = false;
    $casado = true;
    
    $mensaje = "Hola, soy $nombres $apellidos. Tengo $edad años, cuento con \$1 dólar y mido $estatura metros. Estoy cursando $carrera y voy en el $semestre. Mis intereses incluyen " . implode(", ", $intereses) . ".";
    
    if ($viudo) {
        $mensaje .= " Estaba casado pipipi 😭.";
    } elseif ($casado) {
        $mensaje .= " Estoy casado 😁.";
    } else {
        $mensaje .= " Estoy solin solito 😌.";
    } 
?>
    <h1><?= $mensaje; ?></h1>
</body>
