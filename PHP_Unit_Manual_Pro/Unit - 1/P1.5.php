<?php
echo "For Loop: ";
for ($i = 5; $i <= 10; $i++) {
    echo $i . " ";
}

echo "<br>ForEach Loop: ";
foreach (range(5, 10) as $val) {
    echo $val . " ";
}
?>