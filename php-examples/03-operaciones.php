<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="php.ico">
    <title>Matemáticas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            background-color: #2c3e50; 
            color: #ecf0f1; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }
        .container {
            max-width: 800px;
            background-color: #34495e; 
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: auto; /* Permite el desplazamiento dentro del contenedor si es necesario */
            max-height: 100%; 
        }
        h1 {
            text-align: center;
            color: #ecf0f1;
        }
        .section {
            margin-bottom: 20px;
            border-bottom: 1px solid #7f8c8d;
            padding-bottom: 20px;
        }
        .section h2 {
            color: #bdc3c7;
        }
        .result {
            font-size: 20px;
            margin-top: 10px;
            color: #ecf0f1;
        }
    </style>
</head>
<body>
    <div class="container">
        
        <div class="section">
            <?php
            // Generación de números aleatorios
            $num1 = rand(1, 100);
            $num2 = rand(1, 100);
            
            $suma = $num1 + $num2;
            $resta = $num1 - $num2;
            $multiplicacion = $num1 * $num2;
            $division = $num1 / $num2;
            ?>
            <p class="result"><?php echo "$num1 + $num2 = $suma"; ?></p>
            <p class="result"><?php echo "$num1 - $num2 = $resta"; ?></p>
            <p class="result"><?php echo "$num1 * $num2 = $multiplicacion"; ?></p>
            <p class="result"><?php echo "$num1 / $num2 = $division"; ?></p>
        </div>
        
        <div class="section">
            <?php
            // Generación de números aleatorios
            $num3 = rand(1, 10); 
            $num4 = rand(1, 5);  
            
            $potencia = pow($num3, $num4);
            $raiz_cuadrada = sqrt($num3);
            $logaritmo = log($num3);
            ?>
            <p class="result"><?php echo "$num3 ^ $num4 = $potencia"; ?></p>
            <p class="result"><?php echo "Raíz cuadrada de $num3 = $raiz_cuadrada"; ?></p>
            <p class="result"><?php echo "Logaritmo natural de $num3 = $logaritmo"; ?></p>
        </div>
        
        <div class="section">
            <?php
            // Generación de ángulo aleatorio en radianes
            $angulo = deg2rad(rand(0, 360));
            
            // Funciones trigonométricas
            $seno = sin($angulo);
            $coseno = cos($angulo);
            $tangente = tan($angulo);
            ?>
            <p class="result"><?php echo "Sin($angulo) = $seno"; ?></p>
            <p class="result"><?php echo "Cos($angulo) = $coseno"; ?></p>
            <p class="result"><?php echo "Tan($angulo) = $tangente"; ?></p>
        </div>
    </div>
</body>
</html>
