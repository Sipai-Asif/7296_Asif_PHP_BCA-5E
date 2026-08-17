<?php
$name = isset($_GET['q']) ? $_GET['q'] : '';
if ($name !== "") {
    echo "Server received: " . htmlspecialchars($name);
}
?>