<?php
$servername = "localhost";
$username = "root";  // change this to your database username
$password = "";  // change this to your database password
$dbname = "hospital_management";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
REATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    address VARCHAR(255) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    dob DATE NOT NULL,
    password VARCHAR(255) NOT NULL
);