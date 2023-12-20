<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Execute SQL query to fetch user details
$sql = "SELECT * FROM users WHERE id = 1";
$result = mysqli_query($conn, $sql);

// Store fetched data in PHP array
$user = mysqli_fetch_assoc($result);

// Close connection
mysqli_close($conn);
?>