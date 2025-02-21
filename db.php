<?php
$host = "localhost"; // Change if needed
$user = "root"; // Change if using a different MySQL user
$password = ""; // Change if your MySQL has a password
$database = "openclassroomhub"; // Replace with your actual database name

// Create connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
