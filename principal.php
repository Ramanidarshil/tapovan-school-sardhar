<?php
session_start();
include "config.php";

if ($_SESSION['role'] != 'principal') {
    header("Location: index.php");
    exit();
}

$conn = mysqli_connect("localhost", "root", "", "tapovan-school");

if(!$conn){
    die("Database Connection Failed");
}

$result = mysqli_query($conn, "SELECT * FROM login_logs ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Principal Dashboard</title>
<link rel="stylesheet" href="assest/css/principal.css">
</head>
<body>

<div class="dashboard">

    <!-- Sidebar -->
    <aside class="sidebar">
        <h2>Tapovan School</h2>
        <p class="role">Principal Panel</p>
        <ul>
            <li class="active">Dashboard</li>
            <li><a href="#stast">Students</a></li>
            <li>Attendance</li>
            <li>Results</li>
            <li><a href="#table-section">Upload Notice</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </aside>

    <!-- Main Content -->
    <main class="content">

        <h1>Dashboard Overview</h1>
<div>

        <!-- Login Logs Table -->
        <div class="table-section" id="table-section">
            <h2 align="center">Tapovan school login details</h2>

            <table border="1" width="100%">
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Date</th>
                    <th>Time</th>
                </tr>

                <?php while($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['role']; ?></td>
                    <td><?php echo $row['login_date']; ?></td>
                    <td><?php echo $row['login_time']; ?></td>
                </tr>
                <?php } ?>
            </table>

        </div>

    </main>
</div>

</body>
</html>