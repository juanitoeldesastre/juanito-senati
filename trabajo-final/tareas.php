<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Tareas</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Gestión de Tareas</h1>
    <form id="form-tarea" method="post" action="guardar_tarea.php">
        <label for="estudiante">Estudiante:</label>
        <select id="estudiante" name="estudiante" required>
            <!-- Aquí se rellenarán los estudiantes desde PHP -->
            <?php
                include 'conexion.php';
                $query = "SELECT * FROM estudiantes";
                $result = $conn->query($query);

                while($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['id'] . "'>" . $row['nombre'] . "</option>";
                }

                $conn->close();
            ?>
        </select>
        <label for="descripcion">Descripción de la Tarea:</label>
        <textarea id="descripcion" name="descripcion" required></textarea>
        <label for="fecha_entrega">Fecha de Entrega:</label>
        <input type="date" id="fecha_entrega" name="fecha_entrega" required>
        <button type="submit">Añadir</button>
    </form>
    <hr>
    <h2>Lista de Tareas</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Estudiante</th>
                <th>Descripción</th>
                <th>Fecha de Entrega</th>
                <th>Completada</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <!-- Aquí se rellenarán las tareas desde PHP -->
            <?php
                include 'conexion.php';
                $query = "SELECT tareas.id, estudiantes.nombre AS estudiante, tareas.descripcion, tareas.fecha_entrega, tareas.completada 
                          FROM tareas 
                          JOIN estudiantes ON tareas.estudiante_id = estudiantes.id";
                $result = $conn->query($query);

                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['estudiante'] . "</td>";
                    echo "<td>" . $row['descripcion'] . "</td>";
                    echo "<td>" . $row['fecha_entrega'] . "</td>";
                    echo "<td>" . ($row['completada'] ? 'Sí' : 'No') . "</td>";
                    echo "<td>
                            <a href='editar_tarea.php?id=" . $row['id'] . "'>Editar</a> | 
                            <a href='eliminar_tarea.php?id=" . $row['id'] . "'>Eliminar</a>
                          </td>";
                    echo "</tr>";
                }

                $conn->close();
            ?>
        </tbody>
    </table>
</body>
</html>
