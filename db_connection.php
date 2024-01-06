<?php
$host = 'localhost';  // Your database host
$dbname = 'shopme';   // Your database name
$username = 'root'; // Your database username
$password = ''; // Your database password
$port = '3399';  // Specify the port number

try {
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}
?>
