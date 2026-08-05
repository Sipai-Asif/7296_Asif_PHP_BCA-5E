<?php
session_start();
// If not logged in, kick them back to login page
if (!isset($_SESSION['logged_in'])) {
    header("Location: login.php");
    exit();
}
?>
<h1>Welcome to the Home Page</h1>
<a href="logout.php">Logout</a>