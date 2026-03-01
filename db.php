<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "tapovan-school"; // NEW DB NAME

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Database connection failed");
}
?>
