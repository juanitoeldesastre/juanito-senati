<?php
session_start();

// Verificar si el usuario ya está logueado, redirigir si es así
if (isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}

// Verificar el inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // Aquí debes incluir la lógica para verificar las credenciales en tu base de datos
    // Si las credenciales son válidas, inicia la sesión y redirige al usuario a la página de inicio
    // De lo contrario, muestra un mensaje de error
    if ($usuario === 'admin' && $contrasena === 'admin') { // Ejemplo con credenciales estáticas
        $_SESSION['usuario'] = $usuario;
        header("Location: index.php");
        exit();
    } else {
        $error = "Usuario o contraseña incorrectos.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Estilos adicionales según tu preferencia */
    </style>
</head>
<body>
    <header>
        <h1>Iniciar Sesión</h1>
    </header>
    <div class="container">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" required><br>
            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" required><br>
            <button type="submit">Iniciar Sesión</button>
            <?php if (isset($error)) { echo "<p>$error</p>"; } ?> <!-- Mostrar mensaje de error -->
        </form>
    </div>
</body>
</html>
