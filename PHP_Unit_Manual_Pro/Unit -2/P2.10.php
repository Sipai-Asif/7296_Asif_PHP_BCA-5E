<?php
$conn = mysqli_connect("localhost", "root", "", "test") or die("Connection Failed");

// SQL query using CURDATE, CURTIME, UNIX_TIMESTAMP, and FROM_UNIXTIME
$sql = "SELECT 
            CURDATE() AS current_d, 
            CURTIME() AS current_t, 
            UNIX_TIMESTAMP() AS unix_ts, 
            FROM_UNIXTIME(1718224100) AS readable_time";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

echo "<h3>MySQL Timestamp Functions:</h3>";
echo "Current Date: " . $row['current_d'] . "<br>";
echo "Current Time: " . $row['current_t'] . "<br>";
echo "Unix Timestamp: " . $row['unix_ts'] . "<br>";
echo "From Unix Timestamp: " . $row['readable_time'] . "<br>";
?>