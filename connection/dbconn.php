<?php

    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "sph_db";

    // Create connection
    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>