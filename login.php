<?php
date_default_timezone_set('Asia/Kolkata'); // India ka timezone
?>

<?php
session_start();
include "db.php";

$username = $_POST['username'];
$password = $_POST['password'];
$role     = $_POST['role'];

$sql = "SELECT * FROM users 
        WHERE username='$username' 
        AND password='$password' 
        AND role='$role'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {

    $_SESSION['user'] = $username;
    $_SESSION['role'] = $role;

    // ✅ LOGIN DATE & TIME STORE
    $date = date("Y-m-d");
    $time = date("H:i:s");

    $log = "INSERT INTO login_logs (username, role, login_date, login_time)
            VALUES ('$username', '$role', '$date', '$time')";

    mysqli_query($conn, $log);

    // 🔀 REDIRECT
    if ($role == "student") {
        header("Location: student.php");
    } else {
        header("Location: principal.php");
    }
    exit;

} else {
    echo "Invalid login details";
}
?>

