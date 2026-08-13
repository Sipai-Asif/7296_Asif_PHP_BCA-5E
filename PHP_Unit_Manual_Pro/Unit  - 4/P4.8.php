<?php
$conn = mysqli_connect("localhost", "root", "", "my_database");

// Selects only the first 3 rows
$sql = "SELECT * FROM users LIMIT 3"; 
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) {
    echo "User: " . $row['username'] . "<br>";
}
?>