<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input data
    $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
    $apellido = filter_input(INPUT_POST, 'apellido', FILTER_SANITIZE_STRING);
    $edad = filter_input(INPUT_POST, 'edad', FILTER_SANITIZE_NUMBER_INT);
    $talla = filter_input(INPUT_POST, 'talla', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $peso = filter_input(INPUT_POST, 'peso', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $fecha = filter_input(INPUT_POST, 'fecha', FILTER_SANITIZE_STRING);

    if ($edad <= 0 || $edad >= 100) {
        echo '<script>alert("Ingrese una edad mayor a 0 y menor que 100.");</script>';
        exit;
    }

    // Convert checkbox values
    $tos = isset($_POST['tos']) ? 1 : 0;
    $fiebre = isset($_POST['fiebre']) ? 1 : 0;
    $disnea = isset($_POST['disnea']) ? 1 : 0;
    $dolor_muscular = isset($_POST['dolor_muscular']) ? 1 : 0;
    $gripe = isset($_POST['gripe']) ? 1 : 0;
    $Presion_alta = isset($_POST['Presion_alta']) ? 1 : 0;
    $Fatiga = isset($_POST['Fatiga']) ? 1 : 0;
    $Garraspera = isset($_POST['Garraspera']) ? 1 : 0;

    // Result calculation
    $resultado = ($tos || $fiebre || $disnea || $dolor_muscular || $gripe || $Presion_alta || $Fatiga || $Garraspera) ? 1 : 0;

    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "covid";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Prepare SQL and bind parameters
        $stmt = $conn->prepare("INSERT INTO `pacientes` (`nombres`, `apellidos`, `edad`, `talla_m`, `peso_kg`, `sintoma_tos`, `sintoma_fiebre`, `sintoma_disnea`, `sintoma_dolormuscular`, `sintoma_gripe`, `sintoma_presionalta`, `sintoma_fatiga`, `sintoma_garraspera`, `ultima_fecha_vacunacion`, `resultado`) VALUES (:nombre, :apellido, :edad, :talla, :peso, :tos, :fiebre, :disnea, :dolor_muscular, :gripe, :Presion_alta, :Fatiga, :Garraspera, :fecha, :resultado)");
        
        // Bind parameters
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':apellido', $apellido);
        $stmt->bindParam(':edad', $edad, PDO::PARAM_INT);
        $stmt->bindParam(':talla', $talla);
        $stmt->bindParam(':peso', $peso);
        $stmt->bindParam(':tos', $tos, PDO::PARAM_INT);
        $stmt->bindParam(':fiebre', $fiebre, PDO::PARAM_INT);
        $stmt->bindParam(':disnea', $disnea, PDO::PARAM_INT);
        $stmt->bindParam(':dolor_muscular', $dolor_muscular, PDO::PARAM_INT);
        $stmt->bindParam(':gripe', $gripe, PDO::PARAM_INT);
        $stmt->bindParam(':Presion_alta', $Presion_alta, PDO::PARAM_INT);
        $stmt->bindParam(':Fatiga', $Fatiga, PDO::PARAM_INT);
        $stmt->bindParam(':Garraspera', $Garraspera, PDO::PARAM_INT);
        $stmt->bindParam(':fecha', $fecha);
        $stmt->bindParam(':resultado', $resultado, PDO::PARAM_INT);

        // Execute the statement
        $stmt->execute();

        echo "Fue registrado correctamente.";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    // Close the connection
    $conn = null;
}
?>
