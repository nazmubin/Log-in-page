<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "test27/09/2021";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) { // jika connection kepada database ada masalah/error
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
// echo "<br>";