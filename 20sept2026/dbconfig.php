<?php

// Connection With MySQL
$host = "localhost";
$user = "root";
$password = "";
$db = "pwad73";

$conn = mysqli_connect($host, $user, $password, $db);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}else{
    echo "OK";
}

?>