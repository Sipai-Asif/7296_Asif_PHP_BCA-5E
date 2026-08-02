<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['username'];
    // Cookie expires in 1 hour (3600 seconds)
    setcookie("user", $name, time() + 3600, "/"); 
    echo "Cookie has been set for: " . $name;
}
?>