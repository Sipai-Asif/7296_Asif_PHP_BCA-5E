<?php
$m = date('n'); 


if ($m == 7) {
    echo "It is July!<br>";
} else {
    echo "Month number is: $m <br>";
}


switch ($m) {
    case 1: echo "January"; break;
    case 2: echo "February"; break;
    case 3: echo "March"; break;
    case 4: echo "April"; break;
    case 5: echo "May"; break;
    case 6: echo "June"; break;
    case 7: echo "July"; break;
    default: echo "Other Month";
}
?>