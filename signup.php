<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$dbname = "userinfo_database";

// Connect to MySQL
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if passwords match
    if ($password !== $confirm_password) {
        echo "<script>alert('Passwords do not match!'); window.location.href='signup.html';</script>";
        exit();
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert into database
    $sql = "INSERT INTO users (fullname, email, password) VALUES ('$fullname', '$email', '$hashed_password')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registration successful!'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Error: Email already exists!'); window.location.href='signup.html';</script>";
    }
}
$conn->close();
?>
