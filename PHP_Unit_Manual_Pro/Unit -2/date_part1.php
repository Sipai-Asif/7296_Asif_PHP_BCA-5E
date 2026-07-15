<?php
$conn = mysqli_connect("localhost", "root", "", "test") or die("Connection Failed");


$sql = "SELECT 
            DAYOFWEEK(NOW()) AS dw, 
            WEEKDAY(NOW()) AS wd, 
            DAYOFMONTH(NOW()) AS dm, 
            DAYOFYEAR(NOW()) AS dy, 
            DAYNAME(NOW()) AS dname";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

echo "<h3>MySQL Date Functions (Part 1):</h3>";
echo "Day of Week (1-7): " . $row['dw'] . "<br>";
echo "Weekday index (0-6): " . $row['wd'] . "<br>";
echo "Day of Month: " . $row['dm'] . "<br>";
echo "Day of Year: " . $row['dy'] . "<br>";
echo "Day Name: " . $row['dname'] . "<br>";
?>