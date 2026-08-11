<?php
$conn = mysqli_connect("localhost", "root", "", "my_database");

// Prepare template
$stmt = mysqli_prepare($conn, "INSERT INTO users (username, email, password) VALUES (?, ?, ?)");

// Bind parameters ("sss" means 3 strings)
mysqli_stmt_bind_param($stmt, "sss", $uname, $email, $pass);

// Set values and execute
$uname = "bca_student";
$email = "bca@mail.com";
$pass = "pass123";
mysqli_stmt_execute($stmt);

echo "Data inserted securely using Prepared Statement.";
?>