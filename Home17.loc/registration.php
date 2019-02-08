<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reg</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-md-4 m-auto form-block">
            <?php
            require_once('connect.php');
            if (isset($_SESSION['username'])) {
                echo "Вы вошли как: " . $_SESSION['username'] . " ";
                echo "<a href='logout.php'>Выйти</a>";
            } else {
                echo "Вы не вошли в систему.";
            }
            if (isset($_POST['username'], $_POST['password'])) {
                $conn = new Mysqli($servername, $username, $password, $dbHome16);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $user = $_POST['username'];
                $user = $conn->real_escape_string($user);
                $email = $_POST['email'];
                $email = $conn->real_escape_string($email);
                $password = sha1($_POST['password']);
                $firstName = $_POST['first-name'];
                $firstName = $conn->real_escape_string($firstName);
                $lastName = $_POST['last-name'];
                $lastName = $conn->real_escape_string($lastName);
                $age = $_POST['age'];
                $age = $conn->real_escape_string($age);
                $gender = $_POST['gender'];
                $gender = $conn->real_escape_string($gender);

                $sql = "SELECT username FROM users WHERE username = '$user'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                if ($row['username'] === $user) {
                    echo "<p class='text-danger'>Пользователь с таким логином уже существует.</p>";
                } else {
                    $sql = "INSERT INTO users (username, email, password,
                first_name, last_name, age, gender)
                VALUES ('$user', '$email', '$password', '$firstName',
                '$lastName', '$age', '$gender')";
                    $result = $conn->query($sql);
                    if ($result) {
                        ?>
                        <div class="container">
                            <div class="row justify - content - center">
                                <div class="col - 6">
                                    <p class="text-success">Вы успешно
                                        зарегистрировались!</p>
                                    <a href=" / ">На главную</a>
                                </div>
                            </div>
                        </div>
                        <?php
                    } else {
                        echo "Ошибка регистрации." ?>
                        <a href=" / " class="badge badge - primary">Home</a>
                        <?php
                    }
                    $conn->close();
                }
            }
            ?>
            <h1>Регистрация</h1>
            or <br><a href="index.php" class="btn btn-primary">Log in</a>
            <form action="" method="POST">
                <div class="form-group">
                    <input type="text" name="username" class="form-control"
                           placeholder="Enter Username" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control"
                           placeholder="Enter email" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password"
                           class="form-control"
                           placeholder="Password" required>
                </div>
                <div class="form-group">
                    <input type="password" name="confirm-password"
                           class="form-control"
                           placeholder="Confirm Password" required>
                </div>
                <div class="text-danger" id="validate-status" role="alert">
                </div>
                <div class="form-group">
                    <input type="text" name="first-name"
                           class="form-control"
                           placeholder="Enter First name">
                </div>
                <div class="form-group">
                    <input type="text" name="last-name" class="form-control"
                           placeholder="Enter Last name">
                </div>
                <div class="form-group">
                    <input type="number" name="age" min="7"
                           class="form-control"
                           placeholder="Enter age">
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-check text-center">
                            <input class="form-check-input" type="radio"
                                   name="gender"
                                   value="male" required>
                            <label class="form-check-label"
                                   for="input-gender-male">
                                Male
                            </label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-check text-center">
                            <input class="form-check-input" type="radio"
                                   name="gender" id="input-gender-female"
                                   value="female" required>
                            <label class="form-check-label"
                                   for="input-gender-female">
                                Female
                            </label>
                        </div>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary" value="Submit">
            </form>
        </div>
    </div>
</div>
<script src="assets/js/libs.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
