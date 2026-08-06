<?php
// Check if cookies already exist to pre-fill inputs
$saved_user = isset($_COOKIE['remember_user']) ? $_COOKIE['remember_user'] : '';
$saved_pass = isset($_COOKIE['remember_pass']) ? $_COOKIE['remember_pass'] : '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if (isset($_POST['remember'])) {
        // Keep cookies for 7 days
        setcookie("remember_user", $user, time() + (86400 * 7), "/");
        setcookie("remember_pass", $pass, time() + (86400 * 7), "/");
    } else {
        // Clear cookies if unchecked
        setcookie("remember_user", "", time() - 3600, "/");
        setcookie("remember_pass", "", time() - 3600, "/");
    }
    echo "Login successful! Cookies handled.";
}
?>
<form method="POST">
    <input type="text" name="username" value="<?php echo $saved_user; ?>" placeholder="Username" required><br>
    <input type="password" name="password" value="<?php echo $saved_pass; ?>" placeholder="Password" required><br>
    <input type="checkbox" name="remember" <?php if($saved_user) echo 'checked'; ?>> Remember Me<br>
    <button type="submit">Login</button>
</form>