<?php
$conn = mysqli_connect("localhost", "root", "", "my_database");
$sql = "SELECT id, username, email FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["id"] . " | Name: " . $row["username"] . " | Email: " . $row["email"] . "<br>";
    }
} else {
    echo "0 results found.";
}
?>