<?php
$servername = "localhost";
$username = "phpmyadmin";
$password = "SHANkar-php03";
$dbname = "IT_Website";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>