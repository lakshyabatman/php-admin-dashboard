<?php
    $servername = "localhost";
    $username = "lakshya";
    $password = "lakshya2212";
    $dbname = "itbadmin";

    $conn = mysqli_connect($servername, $username, $password, $dbname);  
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>