<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Validar y obtener el nombre limpiando los datos recibidos
        $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);

        // Configuración de la conexión PDO
        $dsn = "mysql:host=localhost;dbname=covid";
        $user = "root";
        $pass = "root";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Manejo de errores
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Modo de obtención de resultados
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", // Codificación UTF-8
        ];

        // Crear la instancia de PDO
        $db = new PDO($dsn, $user, $pass, $options);

        // Consulta preparada para evitar inyección SQL
        $query = $db->prepare("SELECT * FROM pacientes WHERE nombres LIKE :nombre");
        $query->execute(['nombre' => "%$nombre%"]);

        // Obtener los resultados y enviarlos como JSON
        $resultado = $query->fetchAll();
        echo json_encode($resultado);
    } catch (PDOException $e) {
        // Manejo de errores de PDO
        echo "Error: " . $e->getMessage();
    }
}
?>
