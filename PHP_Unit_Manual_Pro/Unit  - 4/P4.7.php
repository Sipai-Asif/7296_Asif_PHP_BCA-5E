<?php
// --- USING MYSQLI ---
$conn = mysqli_connect("localhost", "root", "", "my_database");
$sql1 = "UPDATE users SET email='newjohn@mail.com' WHERE username='john_doe'";
mysqli_query($conn, $sql1);

// --- USING PDO ---
try {
    $pdo = new PDO("mysql:host=localhost;dbname=my_database", "root", "");
    $sql2 = "UPDATE users SET email='newjane@mail.com' WHERE username='jane_doe'";
    $pdo->exec($sql2);
    echo "Records updated successfully.";
} catch(PDOException $e) { echo $e->getMessage(); }
?>