<?php
$conn = mysqli_connect("localhost", "root", "", "test") or die("Connection Failed");


$sql = "SELECT 
            HOUR(NOW()) AS hr, 
            MINUTE(NOW()) AS mn, 
            SECOND(NOW()) AS sc, 
            DATE_FORMAT(NOW(), '%d-%m-%Y') AS formatted_date, 
            DATE_SUB(NOW(), INTERVAL 5 DAY) AS sub_date";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

echo "<h3>MySQL Date Functions (Part 2):</h3>";
echo "Current Hour: " . $row['hr'] . "<br>";
echo "Current Minute: " . $row['mn'] . "<br>";
echo "Current Second: " . $row['sc'] . "<br>";
echo "Formatted Date: " . $row['formatted_date'] . "<br>";
echo "Date minus 5 Days: " . $row['sub_date'] . "<br>";
?>