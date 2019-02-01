<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration form</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<?php

if (isset($_POST['username'], $_POST['password'])) {
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "home16";
    $conn = new Mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $user = $_POST['username'];
    $user = $conn->real_escape_string($user);
    $email = $_POST['email'];
    $email = $conn->real_escape_string($email);
    $password = sha1($_POST['password']);
    $confirmPassword = sha1($_POST['confirm-password']);
    $first_name = $_POST['first-name'];
    $first_name = $conn->real_escape_string($first_name);
    $last_name = $_POST['last-name'];
    $last_name = $conn->real_escape_string($last_name);
    $age = $_POST['age'];
    $age = $conn->real_escape_string($age);
    $gender = $_POST['gender'];
    $gender = $conn->real_escape_string($gender);


    $sql = "INSERT INTO users (username, email, password, confirm_password,
first_name, last_name, age, gender)
VALUES ('$user', '$email', '$password', '$confirmPassword', '$first_name',
'$last_name', '$age', '$gender')";
    $result = $conn->query($sql);

    $conn->close();

    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="alert alert-success m-auto" role="alert">
                    You have successfully registered!
                </div>
                <div class="alert alert-light text-center" role="alert">
                    <a href="/" class="badge badge-primary">Home</a>
                </div>
            </div>
        </div>
    </div>
    <?php
} else {
    ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-4 m-auto form-block">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="inputUsername">Username</label>
                        <input type="text" name="username" class="form-control"
                               id="inputUsername"
                               placeholder="Enter Username" required>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email address</label>
                        <input type="email" name="email" class="form-control"
                               id="inputEmail"
                               placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Password</label>
                        <input type="password" name="password"
                               class="form-control"
                               id="inputPassword" placeholder="Password"
                               required>
                    </div>
                    <div class="form-group">
                        <label for="inputConfirmPassword">Confirm
                            Password</label>
                        <input type="password" name="confirm-password"
                               class="form-control"
                               id="inputConfirmPassword"
                               placeholder="Confirm Password" required>
                    </div>
                    <div class="text-danger" id="validate-status" role="alert">
                    </div>
                    <div class="form-group">
                        <label for="inputFirstName">First name</label>
                        <input type="text" name="first-name"
                               class="form-control"
                               id="inputFirstName"
                               placeholder="Enter First name">
                    </div>
                    <div class="form-group">
                        <label for="inputLastName">Last name</label>
                        <input type="text" name="last-name" class="form-control"
                               id="inputLastName"
                               placeholder="Enter Last name">
                    </div>
                    <div class="form-group">
                        <label for="inputAge">Age</label>
                        <input type="number" name="age" min="7"
                               class="form-control"
                               id="inputAge" placeholder="Enter age">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-check text-center">
                                <input class="form-check-input" type="radio"
                                       name="gender" id="input-gender-male"
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
<?php } ?>
<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "home16";

$conn = new Mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, username, email, password, confirm_password, first_name, last_name, age, gender FROM users";
$result = $conn->query($sql);
echo "Results for Home work 16 part one"."<br>";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " • User: " . $row["username"] . " • Email: " . $row["email"] .
            " • Password: " . $row["password"] . " • First name: " . $row["first_name"] .
            " • Last name: " . $row["last_name"] . " • Age: " . $row["age"] . " • Gender: " . $row["gender"] . "<br><br>";
    }
} else {
    echo "0 results for Home work part one" . "<br><br>";
}

//change database
$dbname = "home16-2";
$conn = new Mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//first task
echo "1. Get all blocks from block table where theme is bartik and module is system" . "<br>";
$sql = "SELECT * FROM `block` WHERE theme = 'bartik' AND module = 'system'";
$result = $conn->query($sql);;
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo " • " . $row["bid"] . " • " . $row["module"] . " • " . $row["delta"] .
            " • " . $row["theme"] . " • " . $row["status"] .
            " • " . $row["weight"] . " • " . $row["region"] . " • " . $row["custom"] .
            " • " . $row["visibility"] . " • " . $row["pages"] . " • " . $row["title"] .
            " • " . $row["cache"] . "<br>";
    }
} else {
    echo "0 results";
}
echo "<br>";
//second task
echo "2. Get nodes where type is delivery and all that made in october and title begins with 8046" . "<br>";
$sql = "SELECT title, type, created FROM `node` WHERE type = 'delivery' AND title LIKE '8046%' AND created BETWEEN 1538352000 AND 1541030399";
$result = $conn->query($sql);;
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo " • Title " . $row["title"] . " • Type " . $row["type"] . " • Created " . $row["created"] . "<br>";
    }
} else {
    echo "0 results";
}
echo "<br>";
//third task
echo "3. Get user name and nodes that where published by user 'serhiy'(output username and email with each node). get last 20 nodes." . "<br>";
$sql = "SELECT node.nid, node.title, users.name, users.mail 
FROM node 
LEFT JOIN users ON node.uid = users.uid
WHERE users.uid = 3
ORDER BY node.created DESC
LIMIT 20";
$result = $conn->query($sql);;
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo " • Node ID " . $row["nid"] . " • Node title " . $row["title"] . " • User name " . $row["name"] . " • User mail " . $row["mail"] . "<br>";
    }
} else {
    echo "0 results";
}
echo "<br>";
//fourth task
echo "4. Get all variable name that has cache word(cache_akjsgdkjag) but not (cache)(see variable table)" . "<br>";
$sql = "SELECT DISTINCT name FROM `variable` WHERE `name` LIKE 'cache!_%' ESCAPE '!'";
$result = $conn->query($sql);;
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo " • Name variable " . $row["name"] . "<br>";
    }
} else {
    echo "0 results";
}
echo "<br>";
$conn->close();
?>
<script src="assets/js/libs.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
