<?php
ob_start();  // Start output buffering

// Connect to the database
$servername = "localhost";
$username = "root";  // Replace with your database username
$password = "";      // Replace with your database password
$dbname = "user_auth";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $email = $_POST['email'];
    $mobile_no = $_POST['mobile_no'];

    // Validate Mobile Number (must be numeric and 10 digits)
    if (!is_numeric($mobile_no) || strlen($mobile_no) != 10) {
        echo "Mobile number must be a 10-digit number.";
        exit();
    }

    // Check if passwords match
    if ($password !== $confirm_password) {
        echo "Passwords do not match!";
        exit();
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO users (username, password, email, mobile_no) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $username, $hashed_password, $email, $mobile_no);

    // Execute the query
    if ($stmt->execute()) {
        // Redirect to login page after successful signup
        echo "Signup successful. Redirecting to login...";
        header("Location: ../index.html");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
ob_end_flush();  // End output buffering and flush output
?>
