<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matemáticas</title>
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
        
        <div class="section">
            <?php
            // Generación de números aleatorios
            $num1 = rand(1, 100);
            $num2 = rand(1, 100);
            
            // Operaciones básicas
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
            $num3 = rand(1, 10); // base para potenciación
            $num4 = rand(1, 5);  // exponente para potenciación
            
            // Operaciones avanzadas
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
