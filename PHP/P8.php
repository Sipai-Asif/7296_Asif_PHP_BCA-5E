<?php
function calculatePercentage($s1,$s2,$s3,$s4,$s5)
{
    $total = $s1 + $s2 + $s3 + $s4 + $s5;
    $Percentage = ($total/500)*100;
    return $Percentage;
}
$Percentage = calculatePercentage(80,85,90,92,87);

echo "Percentage:".$Percentage . "%";
?>