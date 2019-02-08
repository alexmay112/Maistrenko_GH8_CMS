<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New post</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-md-4 m-auto form-block">
            <?php
            if (isset($_SESSION['username'])) {
                echo "Вы вошли как: " . $_SESSION['username'] . " ";
                echo "<a href='logout.php'>Выйти</a>";
            } else {
                echo "Вы не вошли в систему.";
            }
            echo "<br><a href='myposts.php'>История постов</a>";
            ?>
            <h1>Создание нового поста</h1>
            <form action="" method="POST">
                <div class="form-group">
                    <input type="text" name="username" class="form-control"
                           value="<?php echo $_SESSION['username'] ?>" hidden>
                </div>
                <div class="form-group">
                    <input type="text" name="title" class="form-control"
                           placeholder="Название поста" required>
                </div>
                <div class="form-group">
                    <label for="inputBody">Текст поста</label>
                    <textarea class="form-control" name="bodyPost"
                              id="inputBody" cols="30"
                              rows="10" required></textarea>
                </div>
                <input type="submit" class="btn btn-primary" value="Sent post">
            </form>
            <?php
            require_once('connect.php');
            if (isset($_POST['title'], $_POST['bodyPost'])) {
                $conn = new Mysqli($servername, $username, $password, $dbHome16);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $user = $_POST['username'];
                $user = $conn->real_escape_string($user);
                $title = $_POST['title'];
                $title = $conn->real_escape_string($title);
                $bodyPost = $_POST['bodyPost'];
                $bodyPost = $conn->real_escape_string($bodyPost);
                $sql = "
                INSERT INTO posts (username, title, body, created)
                VALUES ('$user', '$title', '$bodyPost', NOW())";
                $result = $conn->query($sql);
                if ($result) {
                    echo "<p class='text-success'>Пост успешно добавлен</p>";
                    $conn->close();
                } else {
                    echo "<p class='text-danger'>Ошибка добавления поста</p>";
                } ?>
            <?php } ?>
            or <br><a href="registration.php" class="btn btn-primary">Registration</a><br>
            or <br><a href="index.php" class="btn btn-primary">Log in</a>
        </div>
    </div>
</div>
<script src="assets/js/libs.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
