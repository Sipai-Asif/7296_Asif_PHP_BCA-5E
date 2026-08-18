<?php
$conn = mysqli_connect("localhost", "root", "", "my_database");
$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM users WHERE id = '$id'");
if ($row = mysqli_fetch_assoc($result)) {
    echo "Username: " . $row['username'] . " | Email: " . $row['email'];
} else {
    echo "User not found.";
}
?>