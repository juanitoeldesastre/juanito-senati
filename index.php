<?php
$mysqli = new mysqli('localhost', 'root', 'root', 'dynamic_website');

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$result = $mysqli->query("SELECT * FROM articles ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .article { margin-bottom: 20px; }
        .article h2 { margin: 0; }
    </style>
</head>
<body>
    <h1>Blog</h1>
    <a href="create_article.php">Crear nuevo artículo</a>
    <hr>
    <?php while ($row = $result->fetch_assoc()): ?>
        <div class="article">
            <h2><a href="article.php?id=<?= $row['id'] ?>"><?= $row['title'] ?></a></h2>
            <p><?= substr($row['content'], 0, 200) ?>...</p>
        </div>
    <?php endwhile; ?>
</body>
</html>