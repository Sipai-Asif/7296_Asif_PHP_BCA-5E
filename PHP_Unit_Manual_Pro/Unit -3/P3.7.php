<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Basic verification
    if ($_POST['username'] == 'admin' && $_POST['password'] == '123') {
        $_SESSION['logged_in'] = true;
        header("Location: home.php");
        exit();
    } else {
        echo "Invalid credentials!";
    }
}
?>
<form method="POST">
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Login</button>
</form>