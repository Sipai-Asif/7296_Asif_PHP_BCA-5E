<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_database";

// 1. MySQLi Connection
$conn_mysqli = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn_mysqli) {
    die("MySQLi Connection failed: " . mysqli_connect_error());
}
echo "MySQLi Connected successfully!<br>";

// 2. PDO Connection
try {
    $conn_pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "PDO Connected successfully!";
} catch(PDOException $e) {
    echo "PDO Connection failed: " . $e->getMessage();
}
?>