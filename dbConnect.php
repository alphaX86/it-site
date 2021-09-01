<?php
$servername = "mysql.it.mitindia.edu";
$username = "it_webteam";
$password = "itzwebteamit12";
$dbname = "admin_it";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>