<?php
// --- USING MYSQLI ---
$conn = mysqli_connect("localhost", "root", "", "my_database");
$sql1 = "CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(50),
    password VARCHAR(50)
)";
if (mysqli_query($conn, $sql1)) {
    echo "Table created via MySQLi.<br>";
}

// --- USING PDO ---
try {
    $pdo = new PDO("mysql:host=localhost;dbname=my_database", "root", "");
    $sql2 = "CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL,
        email VARCHAR(50),
        password VARCHAR(50)
    )";
    $pdo->exec($sql2);
    echo "Table created via PDO.";
} catch(PDOException $e) { echo $e->getMessage(); }
?>