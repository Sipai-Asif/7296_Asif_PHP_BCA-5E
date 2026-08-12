<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
echo "<h1>Welcome to Home Page, " . $_SESSION['user'] . "</h1>";
?>