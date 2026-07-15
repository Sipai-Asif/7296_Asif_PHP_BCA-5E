<?php
$var = "125.50";
echo "Initial Type: " . gettype($var) . " (Value: $var)<br>";


settype($var, "integer");
echo "New Type: " . gettype($var) . " (Value: $var)<br>";
?>