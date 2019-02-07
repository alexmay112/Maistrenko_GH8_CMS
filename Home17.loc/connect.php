<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbHome16 = "home16";
$conn = new Mysqli($servername, $username, $password, $dbHome16);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
