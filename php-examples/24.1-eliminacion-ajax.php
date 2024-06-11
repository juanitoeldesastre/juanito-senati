<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "covid";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
        $id = $_POST['id'];
        $stmt = $conn->prepare("DELETE FROM pacientes WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        echo json_encode(["success" => true, "message" => "Se eliminó el paciente correctamente"]);
    } else {
        echo json_encode(["success" => false, "message" => "No se encontró el ID del paciente a eliminar"]);
    }
} catch (PDOException $e) {
    echo json_encode(["success" => false, "message" => "Error al eliminar el paciente: " . $e->getMessage()]);
}
?>
