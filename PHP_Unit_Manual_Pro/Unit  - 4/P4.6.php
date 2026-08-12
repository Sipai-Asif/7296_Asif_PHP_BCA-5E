<?php
// --- USING MYSQLI ---
$conn = mysqli_connect("localhost", "root", "", "my_database");
$sql1 = "DELETE FROM users WHERE id = 1";
mysqli_query($conn, $sql1);

// --- USING PDO ---
try {
    $pdo = new PDO("mysql:host=localhost;dbname=my_database", "root", "");
    $sql2 = "DELETE FROM users WHERE id = 2";
    $pdo->exec($sql2);
    echo "Records deleted successfully.";
} catch(PDOException $e) { echo $e->getMessage(); }
?>