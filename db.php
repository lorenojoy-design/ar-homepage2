<?php
$host = 'localhost';
$db   = 'museumdb';
$user = 'root';
$pass = ''; // usually blank in XAMPP

$conn = new mysqli("localhost", "root", "", "museumdb");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
