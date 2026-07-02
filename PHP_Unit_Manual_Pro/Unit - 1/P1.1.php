<?php
define("COLLEGE", "Marwadi University");
$name = "John Doe";
$marks = 250; // out of 300

$percentage = ($marks / 300) * 100;

echo "College: " . COLLEGE . "<br>";
echo "Student: $name <br>";
echo "Percentage: " . round($percentage, 2) . "%";
?>
