<?php
// Include database connection
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);

    // Validate form inputs
    if (!empty($name) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Prepare SQL statement to insert data
        $stmt = $conn->prepare("INSERT INTO subscription (name, email) VALUES (?, ?)");
        $stmt->bind_param("ss", $name, $email);

        // Execute query
        if ($stmt->execute()) {
            $stmt->close();
            $conn->close();

            // Redirect to thank you page
            header("Location: thankyou.php");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }
    } else {
        echo "Invalid name or email!";
    }
}
?>
