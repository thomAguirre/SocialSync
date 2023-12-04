<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "social_sync_db";

$conn = new mysqli($servername, $username, $password, $social_sync_db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>