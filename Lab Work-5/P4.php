<?php
// Do alag-alag arrays banaye
$arr1 = ["apple", "orange"];
$arr2 = ["banana", "coconut"];

// array_merge() function se dono ko ek sath joda
$result = array_merge($arr1, $arr2);

// merged array ko print kiya
foreach ($result as $val) {
    echo $val . "<br>";
}
?>