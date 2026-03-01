<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Profile</title>
    <link rel="stylesheet" href="profile.css">
</head>
<body>

<div class="profile-container">

    <h2>My Profile</h2>

    <div class="profile-card">
        <form method="POST" action="update_profile.php">

            <label>Username</label>
            <input type="text" value="<?php echo $_SESSION['user']; ?>" disabled>

            <label>Role</label>
            <input type="text" value="<?php echo $_SESSION['role']; ?>" disabled>

            <label>Full Name</label>
            <input type="text" name="fullname" placeholder="Enter full name">

            <label>Email</label>
            <input type="email" name="email" placeholder="Enter email">

            <label>Mobile</label>
            <input type="text" name="mobile" placeholder="Enter mobile number">

            <button type="submit">Update Profile</button>
        </form>
    </div>

    <a href="logout.php" class="logout">Logout</a>

</div>

</body>
</html>
