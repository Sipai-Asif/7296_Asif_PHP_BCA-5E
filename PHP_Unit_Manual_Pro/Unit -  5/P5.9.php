<?php
// Dummy data arrays for demonstration
$suggestions = ["Apple", "Banana", "Cherry", "Date", "Grape", "Mango"];
$q = strtolower($_GET['q']);

foreach ($suggestions as $name) {
    if (strpos(strtolower($name), $q) !== false) {
        echo "<div>" . $name . "</div>";
    }
}
?>