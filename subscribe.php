<?php
require 'db.php'; // Ensure this file properly establishes the $conn connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);

    // Insert new subscriber (if email exists, ignore the error)
    $insertQuery = "INSERT IGNORE INTO subscription (name, email) VALUES (?, ?)";
    $stmt = $conn->prepare($insertQuery);
    $stmt->bind_param("ss", $name, $email);
    $stmt->execute();
    
    // Redirect to thank you page always
    header("Location: thankyou.php");
    exit();

    $stmt->close();
    $conn->close();
}
?>
