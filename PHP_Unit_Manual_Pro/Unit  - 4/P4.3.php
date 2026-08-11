<?php
// --- USING MYSQLI ---
$conn = mysqli_connect("localhost", "root", "", "my_database");
$sql1 = "INSERT INTO users (username, email, password) VALUES ('john_doe', 'john@mail.com', '1234')";
mysqli_query($conn, $sql1);

// --- USING PDO ---
try {
    $pdo = new PDO("mysql:host=localhost;dbname=my_database", "root", "");
    $sql2 = "INSERT INTO users (username, email, password) VALUES ('jane_doe', 'jane@mail.com', '5678')";
    $pdo->exec($sql2);
    echo "Data inserted successfully in both!";
} catch(PDOException $e) { echo $e->getMessage(); }
?>