<?php
$servername = "localhost";
$username = "ss";
$password = "sspass";
$dbname = "socialsync";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>