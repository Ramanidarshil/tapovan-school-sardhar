<?php
session_start();
if ($_SESSION['role'] != 'student') {
    header("Location: index.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Student Dashboard</title>

<link rel="stylesheet" href="assest/css/student.css">
</head>
<body>

<div class="dashboard">

    <aside class="sidebar">
        <h2>Tapovan School</h2>
        <ul>
            <li class="active">Profile</li>
            <li>Attendance</li>
            <li>Results</li>
            <li>Week Test</li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </aside>

    <main class="content">

        <div class="profile-card">
            <img src="assest/img/1.jpg" alt="Student Photo">
            <h3>Student Name</h3>
            <p>Class: 10-A</p>
            <p>Roll No: 23</p>
        </div>

        <div class="info-grid">
            <div class="box">
                <h4>Attendance</h4>
                <p>92%</p>
            </div>
            <div class="box">
                <h4>Latest Result</h4>
                <p>Pass</p>
            </div>
            <div class="box">
                <h4>Week Test</h4>
                <p>18 / 20</p>
            </div>
        </div>

    </main>

</div>

</body>
</html>

