<?php
$str = "Hello World";

echo "Length: " . strlen($str) . "<br>";
echo "Position of 'World': " . strpos($str, "World") . "<br>";
echo "Word Count: " . str_word_count($str) . "<br>";
echo "Reverse: " . strrev($str) . "<br>";
echo "Lowercase: " . strtolower($str) . "<br>";
echo "Uppercase: " . strtoupper($str) . "<br>";
?>