<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="php.ico">
    <title>Operaciones</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            font-size: 2em;
            color: #0056b3;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #0056b3;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Resultados de las Operaciones</h1>
        <?php
            $numero1 = 10;
            $numero2 = 20;

            // Operaciones básicas
            $suma = $numero1 + $numero2;
            $resta = $numero1 - $numero2;
            $multiplicacion = $numero1 * $numero2;
            $division = $numero1 / $numero2;
            $modulo = $numero1 % $numero2;
            $potencia = pow($numero1, $numero2);

            // Operaciones matemáticas adicionales
            $raiz_cuadrada1 = sqrt($numero1);
            $raiz_cuadrada2 = sqrt($numero2);
            $logaritmo1 = log($numero1); // Logaritmo natural
            $logaritmo2 = log($numero2);
            $logaritmo_base10_1 = log10($numero1); // Logaritmo base 10
            $logaritmo_base10_2 = log10($numero2);
            $seno1 = sin($numero1);
            $seno2 = sin($numero2);
            $coseno1 = cos($numero1);
            $coseno2 = cos($numero2);
            $tangente1 = tan($numero1);
            $tangente2 = tan($numero2);

            function format_number($number) {
                return number_format($number, 2);
            }
        ?>
        <table>
            <tr>
                <th>Operación</th>
                <th>Resultado</th>
            </tr>
            <tr>
                <td>Suma</td>
                <td><?php echo htmlspecialchars(format_number($suma)); ?></td>
            </tr>
            <tr>
                <td>Resta</td>
                <td><?php echo htmlspecialchars(format_number($resta)); ?></td>
            </tr>
            <tr>
                <td>Multiplicación</td>
                <td><?php echo htmlspecialchars(format_number($multiplicacion)); ?></td>
            </tr>
            <tr>
                <td>División</td>
                <td><?php echo htmlspecialchars(format_number($division)); ?></td>
            </tr>
            <tr>
                <td>Módulo</td>
                <td><?php echo htmlspecialchars(format_number($modulo)); ?></td>
            </tr>
            <tr>
                <td>Potencia</td>
                <td><?php echo htmlspecialchars(format_number($potencia)); ?></td>
            </tr>
            <tr>
                <td>Raíz Cuadrada de <?php echo htmlspecialchars(format_number($numero1)); ?></td>
                <td><?php echo htmlspecialchars(format_number($raiz_cuadrada1)); ?></td>
            </tr>
            <tr>
                <td>Raíz Cuadrada de <?php echo htmlspecialchars(format_number($numero2)); ?></td>
                <td><?php echo htmlspecialchars(format_number($raiz_cuadrada2)); ?></td>
            </tr>
            <tr>
                <td>Logaritmo Natural de <?php echo htmlspecialchars(format_number($numero1)); ?></td>
                <td><?php echo htmlspecialchars(format_number($logaritmo1)); ?></td>
            </tr>
            <tr>
                <td>Logaritmo Natural de <?php echo htmlspecialchars(format_number($numero2)); ?></td>
                <td><?php echo htmlspecialchars(format_number($logaritmo2)); ?></td>
            </tr>
            <tr>
                <td>Logaritmo Base 10 de <?php echo htmlspecialchars(format_number($numero1)); ?></td>
                <td><?php echo htmlspecialchars(format_number($logaritmo_base10_1)); ?></td>
            </tr>
            <tr>
                <td>Logaritmo Base 10 de <?php echo htmlspecialchars(format_number($numero2)); ?></td>
                <td><?php echo htmlspecialchars(format_number($logaritmo_base10_2)); ?></td>
            </tr>
            <tr>
                <td>Seno de <?php echo htmlspecialchars(format_number($numero1)); ?></td>
                <td><?php echo htmlspecialchars(format_number($seno1)); ?></td>
            </tr>
            <tr>
                <td>Seno de <?php echo htmlspecialchars(format_number($numero2)); ?></td>
                <td><?php echo htmlspecialchars(format_number($seno2)); ?></td>
            </tr>
            <tr>
                <td>Coseno de <?php echo htmlspecialchars(format_number($numero1)); ?></td>
                <td><?php echo htmlspecialchars(format_number($coseno1)); ?></td>
            </tr>
            <tr>
                <td>Coseno de <?php echo htmlspecialchars(format_number($numero2)); ?></td>
                <td><?php echo htmlspecialchars(format_number($coseno2)); ?></td>
            </tr>
            <tr>
                <td>Tangente de <?php echo htmlspecialchars(format_number($numero1)); ?></td>
                <td><?php echo htmlspecialchars(format_number($tangente1)); ?></td>
            </tr>
            <tr>
                <td>Tangente de <?php echo htmlspecialchars(format_number($numero2)); ?></td>
                <td><?php echo htmlspecialchars(format_number($tangente2)); ?></td>
            </tr>
        </table>
    </div>
</body>
</html>
