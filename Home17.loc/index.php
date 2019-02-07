<?php
session_start();
if (isset($_SESSION['username'])) {
    echo "Вы вошли как: " . $_SESSION['username']." ";
    echo "<a href='logout.php'>Выйти</a>";
} else {
    echo "Вы не вошли в систему.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home17</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<?php
require_once('connect.php');
if (isset($_POST['username'], $_POST['password'])) {

    $user = $_POST['username'];
    $user = $conn->real_escape_string($user);
    $password = sha1($_POST['password']);

    $sql = "SELECT username, password FROM users WHERE username = '$user' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $user;
        echo "Вы вошли как: ". $user;
        echo "<a href='logout.php'> Выйти</a>";
    } else {
        echo "Логин или пароль неправильный" . "<br><br>";
    }
    $conn->close();
} ?>
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-md-4 m-auto form-block">
            <a href="new-post.php">Добавить новый пост</a>
            <h1>Log in</h1>
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
