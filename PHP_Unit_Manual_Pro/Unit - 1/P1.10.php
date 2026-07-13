<?php
$array1 = ["Apple", "Banana"];
$array2 = ["Potato", "Tomato"];


$result = array_merge($array1, $array2);

echo "<h3>Merged Output:</h3>";
echo "<pre>";
print_r($result);
echo "</pre>";
?>