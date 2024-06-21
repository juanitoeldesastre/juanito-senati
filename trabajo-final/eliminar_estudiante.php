<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $estudiante_id = $_GET['id'];

    // Verificar si el estudiante existe en la base de datos
    $query = "SELECT * FROM estudiantes WHERE id = '$estudiante_id'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // Eliminar el estudiante de la base de datos
        $delete_query = "DELETE FROM estudiantes WHERE id = '$estudiante_id'";
        if ($conn->query($delete_query) === TRUE) {
            echo "<script>
                    alert('Estudiante eliminado correctamente.');
                    window.location.href = 'estudiantes.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Error al eliminar el estudiante: " . $conn->error . "');
                    window.location.href = 'estudiantes.php';
                  </script>";
        }
    } else {
        echo "<script>
                alert('Estudiante no encontrado.');
                window.location.href = 'estudiantes.php';
              </script>";
    }
} else {
    echo "<script>
            alert('ID de estudiante no proporcionado o método incorrecto.');
            window.location.href = 'estudiantes.php';
          </script>";
}

$conn->close();
?>
