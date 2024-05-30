<?php
$mysqli = new mysqli('localhost', 'root', 'root', 'dynamic_website');

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $article_result = $mysqli->query("SELECT * FROM articles WHERE id = $id");
    $article = $article_result->fetch_assoc();

    $comments_result = $mysqli->query("SELECT * FROM comments WHERE article_id = $id ORDER BY created_at DESC");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $comment = $_POST['comment'];
    $mysqli->query("INSERT INTO comments (article_id, comment) VALUES ($id, '$comment')");
    header("Location: article.php?id=$id");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $article['title'] ?></title>
</head>
<body>
    <h1><?= $article['title'] ?></h1>
    <p><?= $article['content'] ?></p>
    <hr>
    <h3>Comentarios</h3>
    <?php while ($comment = $comments_result->fetch_assoc()): ?>
        <div class="comment">
            <p><?= $comment['comment'] ?></p>
            <small><?= $comment['created_at'] ?></small>
        </div>
    <?php endwhile; ?>
    <hr>
    <form method="POST">
        <textarea name="comment" required></textarea><br>
        <button type="submit">Añadir comentario</button>
    </form>
</body>
</html>
