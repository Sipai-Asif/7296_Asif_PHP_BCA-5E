<?php
// Connect to Laragon's default MySQL database
$conn = mysqli_connect("localhost", "root", "", "test") or die("Connection Failed");

// SQL query using LENGTH, CONCAT, CONCAT_WS, TRIM, LTRIM, RTRIM, LPAD, RPAD, and LOCATE
$sql = "SELECT 
            LENGTH('Laragon') AS len, 
            CONCAT('Hello', 'World') AS cat, 
            CONCAT_WS('-', 'A', 'B', 'C') AS ws, 
            TRIM('  PHP  ') AS trm, 
            LPAD('7', 3, '0') AS lpad, 
            RPAD('7', 3, 'X') AS rpad, 
            LOCATE('a', 'Banana') AS loc";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

echo "<h3>MySQL String Functions Output:</h3>";
echo "Length: " . $row['len'] . "<br>";
echo "Concat: " . $row['cat'] . "<br>";
echo "Concat With Separator: " . $row['ws'] . "<br>";
echo "Trimmed: " . $row['trm'] . "<br>";
echo "Left Pad: " . $row['lpad'] . "<br>";
echo "Right Pad: " . $row['rpad'] . "<br>";
echo "Locate position of 'a': " . $row['loc'] . "<br>";
?>