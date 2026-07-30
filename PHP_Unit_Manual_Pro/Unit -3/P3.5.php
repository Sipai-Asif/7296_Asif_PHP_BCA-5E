<?php
session_start(); // Always start the session first

$_SESSION["username"] = "Admin";
$_SESSION["role"] = "Editor";

echo "Session variables are set.";
?>