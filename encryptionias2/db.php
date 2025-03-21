<?php
$host = "localhost";
$user = "root"; // Default user for XAMPP
$pass = ""; // No password by default in XAMPP
$db = "encryptionians2";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>