<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login page</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-md-4 m-auto form-block">
            <?php
            require_once('connect.php');
            if (isset($_SESSION['username'])) {
                echo "Вы вошли как: " . $_SESSION['username'] . " " . "<a href='logout.php'>Выйти</a>";
            } else {
                echo "Вы не вошли в систему." . "<br>";
            }
            if (isset($_POST['username'], $_POST['password'])) {
                $user = $_POST['username'];
                $user = $conn->real_escape_string($user);
                $password = sha1($_POST['password']);
                $sql = "SELECT username, password FROM users WHERE username = '$user' AND password = '$password'";
                $result = $conn->query($sql);

                if ($result->num_rows === 1) {
                    $row = $result->fetch_assoc();
                    if ($row['password'] === $password && $row['username'] === $user) {
                        $_SESSION['username'] = $user;
                        echo "Вы вошли как: " . $_SESSION['username'] . " " . "<a href='logout.php'>Выйти</a>";
                    }
                } else {
                    echo "<p class='text-danger'>Логин или пароль неправильный</p>" . "<br><br>";
                }
                $conn->close();
            }
            if (isset($_SESSION['username'])) {
                echo "<br><a href='new-post.php'>Добавить новый пост</a>";
                echo "<br><a href='myposts.php'>История постов</a>";
            }
            ?>
            <h1>Вход</h1>
            <form action="" method="POST">
                <div class="form-group">
                    <input type="text" name="username" class="form-control"
                           id="inputUsername"
                           placeholder="Enter Username" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password"
                           class="form-control"
                           id="inputPassword" placeholder="Password"
                           required>
                </div>
                <input type="submit" class="btn btn-primary" value="Login">
            </form>
            or <br><a href="registration.php" class="btn btn-primary">Registration</a>
        </div>
    </div>
</div>
<script src="assets/js/libs.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
