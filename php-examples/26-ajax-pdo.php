<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $nombre = $_POST["nombre"];
        $dsn = "mysql:host=localhost;dbname=covid";
        $user = "root"; // Cambiar a tu usuario de la base de datos
        $pass = ""; // Cambiar a tu contraseña de la base de datos
        $db = new PDO($dsn, $user, $pass);
        
        // Consulta SQL para obtener los datos de la base de datos COVID
        $consulta = "SELECT * FROM pacientes WHERE nombres LIKE '%$nombre%'";
        $pacientes = $db->query($consulta);
        
        $resultado = [];
        foreach ($pacientes as $row) {
            array_push($resultado, $row);
        }

        echo json_encode($resultado);
    } catch (PDOException $e) {
        echo "Error : " . $e->getMessage();
    }
}
?>
