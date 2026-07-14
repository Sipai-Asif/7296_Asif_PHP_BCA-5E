<?php

$days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];


$months = ["January" => 31, "February" => 28, "March" => 31];


$laptops = [
    "Dell" => ["Inspiron" => 55000, "XPS" => 120000],
    "HP" => ["Pavilion" => 60000, "Omen" => 95000]
];

echo "Numeric: " . $days[0] . "<br>";
echo "Associative (January Days): " . $months["January"] . "<br>";
echo "Multidimensional (Dell XPS Price): " . $laptops["Dell"]["XPS"];
?>