<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Importar Archivos PDF</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Importar Archivos PDF</h1>
    <form id="form-pdf" method="post" action="guardar_pdf.php" enctype="multipart/form-data">
        <label for="pdf">Seleccionar PDF:</label>
        <input type="file" id="pdf" name="pdf" accept=".pdf" required>
        <button type="submit">Importar PDF</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["pdf"]["name"]);
        $uploadOk = 1;
        $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "El archivo ya existe.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["pdf"]["size"] > 5000000) { // 5MB
            echo "El archivo es demasiado grande.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if ($fileType != "pdf") {
            echo "Solo se permiten archivos PDF.";
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            echo "Error al subir el archivo.";
        } else {
            if (move_uploaded_file($_FILES["pdf"]["tmp_name"], $target_file)) {
                // Guardar en la base de datos
                $nombreArchivo = htmlspecialchars(basename($_FILES["pdf"]["name"]));
                $conexion = new mysqli("localhost", "usuario", "contrasena", "nombre_basedatos");

                // Verificar la conexión
                if ($conexion->connect_error) {
                    die("Error de conexión: " . $conexion->connect_error);
                }

                // Preparar la consulta SQL para insertar el archivo en la tabla de estudiantes
                $sql = "INSERT INTO estudiantes (nombre, documento_pdf) VALUES (?, ?)";
                $stmt = $conexion->prepare($sql);

                // Enlazar los parámetros
                $stmt->bind_param("ss", $nombre, $nombreArchivo);

                // Ejecutar la consulta
                if ($stmt->execute()) {
                    echo "El archivo $nombreArchivo ha sido importado y registrado correctamente.";
                } else {
                    echo "Error al registrar el archivo en la base de datos.";
                }

                // Cerrar la conexión
                $stmt->close();
                $conexion->close();
            } else {
                echo "Error al subir el archivo.";
            }
        }
    }
    ?>
</body>
</html>
