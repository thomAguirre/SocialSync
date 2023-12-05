<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM User WHERE Username='$username' AND Password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Login successful
        $_SESSION['username'] = $username;
        header("Location: /site.php"); // Redirect to the main site
    } else {
        // Login failed
        echo "Invalid username or password";
    }
}

$conn->close();
?>