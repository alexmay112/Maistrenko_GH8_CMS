<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My posts</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-6">
            <?php
            require_once('connect.php');
            if (isset($_SESSION['username'])) {
                echo "Вы вошли как: " . $_SESSION['username'] . " ";
                echo "<a href='logout.php'>Выйти</a>";
            } else {
                echo "Вы не вошли в систему.";
            }
            ?>
            <p><a href='new-post.php'>Добавить новый пост</a></p>
            <p><a href="/">На главную</a></p>
            <h1>Мои посты</h1>
            <?php
            $user = $_SESSION['username'];
            $sql = "SELECT title, body, created FROM posts WHERE username = '$user'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<h2>" . $row["title"] . "</h2>" . "<br>" . "<p>". $row["body"]."</p>" . "<br>" . "Создан: " . $row["created"] . "<br>";
                }
            } else {
                echo "У Вас пока нет постов" . "<br><br>";
            }
            ?>
        </div>
    </div>
</div>
<script src="assets/js/libs.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>

