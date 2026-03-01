<?php
// Local DB
$local_host = "localhost";
$local_user = "root";
$local_pass = "";
$local_db = "tapovan-school";

// Live DB (000webhost example)
$live_host = "sql123.epizy.com";
$live_user = "epiz_12345678";
$live_pass = "password123";
$live_db   = "epiz_12345678_tapovan_school";

// Toggle for local/live
$server = "local"; // "live" for 000webhost

if($server == "local"){
    $conn = mysqli_connect($local_host, $local_user, $local_pass, $local_db);
}else{
    $conn = mysqli_connect($live_host, $live_user, $live_pass, $live_db);
}

if(!$conn){
    die("Database Connection Failed: ".mysqli_connect_error());
}
?>