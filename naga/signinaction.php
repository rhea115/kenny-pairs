<?php
// Database connection parameters
$host = "localhost";
$username = "root";
$password = "";
$database = "signin";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process sign-in attempt
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Perform validation and authentication (Replace with your authentication logic)
    $validUsername = "Rheamae Naga";
    $validPassword = "12345";

    if ($username === $validUsername && $password === $validPassword) {
        // Authentication successful
        // Redirect to a success page
        header("Location: login_success.php");
        exit();
    } else {
        // Authentication failed
        // Redirect back to the sign-in form with an error message
        header("Location: sign-in.php?error=1");
        exit();
    }
}

// Close the database connection
$conn->close();
?>
