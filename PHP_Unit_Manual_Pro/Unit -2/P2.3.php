<?php
$months = ["Jan" => 31, "Feb" => 28, "Mar" => 31];
$colors = ["Red", "Green", "Blue", "Red"];


print_r(array_change_key_case($months, CASE_UPPER)); echo "<br>";


print_r(array_chunk($colors, 2)); echo "<br>";


print_r(array_count_values($colors)); echo "<br>";


array_push($colors, "Yellow"); 
array_pop($colors);            


array_unshift($colors, "Pink"); 
array_shift($colors);            

echo "Final Array: " . implode(", ", $colors);
?>