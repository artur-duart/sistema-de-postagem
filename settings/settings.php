<?php

// Data of server
$host = "localhost";
$login = "root";
$password = "";
$database = "db";

$mysqli = new mysqli($host, $login, $password,$database);

// Making the connection
$conn = mysqli_connect($host, $login, $password) or print(mysqli_error($conn));
mysqli_select_db($conn, $database) or print(mysqli_error($conn));

//Verification
if (!mysqli_connect($host, $login, $password)) {
    echo "Error connecting to database!";
}
