<?php
include "config.php";

if (isset($_POST['name'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $query = "INSERT INTO admision (name, email, message) 
              VALUES ('$name', '$email', '$message')";

    if (mysqli_query($conn, $query)) {
        echo "form submited Successfully";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>