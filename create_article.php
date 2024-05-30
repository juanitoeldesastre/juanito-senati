<?php
$mysqli = new mysqli('localhost', 'root', 'root', 'dynamic_website');

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $mysqli->query("INSERT INTO articles (title, content) VALUES ('$title', '$content')");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear artículo</title>
</head>
<body>
    <h1>Crear nuevo artículo</h1>
    <form method="POST">
        <input type="text" name="title" placeholder="Título" required><br>
        <textarea name="content" placeholder="Contenido" required></textarea><br>
        <button type="submit">Crear</button>
    </form>
</body>
</html>
