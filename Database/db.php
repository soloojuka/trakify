<?php
$host = "localhost";
$user = "root"; // Change if you have a different username
$password = ""; // Change if you have a database password
$database = "Trakify";

$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
