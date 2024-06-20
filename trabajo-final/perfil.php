<?php
session_start();

// Verificar si el usuario no está logueado, redirigir al formulario de inicio de sesión
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

// Verificar si se ha enviado el formulario de cambio de contraseña
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar que todos los campos del formulario están presentes
    if (isset($_POST['old_password'], $_POST['new_password'], $_POST['confirm_password'])) {
        // Obtener las contraseñas ingresadas por el usuario
        $old_password = $_POST['old_password'];
        $new_password = $_POST['new_password'];
        $confirm_password = $_POST['confirm_password'];

        // Verificar que la contraseña antigua sea correcta (aquí debes implementar tu lógica de verificación de contraseñas)
        // Supongamos que $old_password es la contraseña almacenada en la base de datos para el usuario actual

        // Comprobar que la contraseña nueva y la confirmación coincidan
        if ($new_password === $confirm_password) {
            // Aquí debes implementar la lógica para actualizar la contraseña en la base de datos
            // Supongamos que se ha actualizado la contraseña correctamente

            // Redirigir a la página de perfil con un mensaje de éxito
            header("Location: perfil.php?msg=success");
            exit();
        } else {
            // Mostrar un mensaje de error si las contraseñas no coinciden
            $error_message = "Las contraseñas no coinciden. Inténtalo de nuevo.";
        }
    } else {
        // Mostrar un mensaje de error si faltan campos en el formulario
        $error_message = "Por favor, completa todos los campos del formulario.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Estilos CSS */
    </style>
</head>
<body>
    <div class="container">
        <h1>Bienvenido a tu perfil</h1>
        <p>Hola, <?php echo $_SESSION['usuario']; ?>. Esta es tu página de perfil.</p>
        <p>Aquí puedes ver y gestionar tu información personal.</p>

        <?php
        if (isset($error_message)) {
            echo '<div style="color: red; margin-bottom: 10px;">' . $error_message . '</div>';
        }
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="old_password">Contraseña Antigua:</label>
            <input type="password" id="old_password" name="old_password" required><br>

            <label for="new_password">Nueva Contraseña:</label>
            <input type="password" id="new_password" name="new_password" required><br>

            <label for="confirm_password">Confirmar Nueva Contraseña:</label>
            <input type="password" id="confirm_password" name="confirm_password" required><br>

            <input type="submit" value="Actualizar Contraseña">
        </form>

        <a href="logout.php" class="logout-btn">Cerrar Sesión</a>
    </div>
</body>
</html>
