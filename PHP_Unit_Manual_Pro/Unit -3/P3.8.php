<?php
if (!isset($_COOKIE["visited"])) {
    // Set a cookie for 1 year
    setcookie("visited", "yes", time() + (86400 * 365), "/");
    echo "Welcome! You are a New User.";
} else {
    echo "Welcome back! You are a Repeated Visitor.";
}
?>