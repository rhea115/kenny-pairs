<?php
// Database connection parameters
$host = "localhost";
$username = "root;
$password = "";
$database = "signup";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $mname = $_POST["mname"];
    $gender = $_POST["gender"];
    $bday = $_POST["bday"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $retypepassword = $_POST["retypepassword"];
    $address = $_POST["address"];
    $contactnumber = $_POST["contactnumber"];

    // Insert data into the database
    $sql = "INSERT INTO users (fname, lname, mname, gender, bday, email, username, password, address, contactnumber) VALUES ('$fname', '$lname', '$mname', '$gender', '$bday', '$email', '$username', '$password', '$address', '$contactnumber')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        // Redirect to a success page
        header("Location: login_success.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
