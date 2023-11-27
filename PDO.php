<?php
$servername = "localhost";
$username = "username";
$password = "password";
$database = "dbname";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";

    // Perform database operations here
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Close connection (for PDO, it is automatically closed when the script ends)
// For MySQLi, use $conn = null; to explicitly close the connection if needed
?>
