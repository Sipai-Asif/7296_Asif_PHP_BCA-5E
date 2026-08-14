<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "my_database");

// Assume 'john_doe' is currently logged in for demo purposes
$current_user = "john_doe"; 

// 1. Fetch existing details
$result = mysqli_query($conn, "SELECT * FROM users WHERE username='$current_user'");
$row = mysqli_fetch_assoc($result);

// 2. Update details if form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_email = $_POST['email'];
    $new_pass = $_POST['password'];

    $update_sql = "UPDATE users SET email='$new_email', password='$new_pass' WHERE username='$current_user'";
    if (mysqli_query($conn, $update_sql)) {
        echo "Profile updated successfully!";
        // Refresh values
        $row['email'] = $new_email;
        $row['password'] = $new_pass;
    }
}
?>
<h2>Edit Profile</h2>
<form method="POST">
    Username: <input type="text" value="<?php echo $row['username']; ?>" disabled><br><br>
    Email: <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br><br>
    Password: <input type="text" name="password" value="<?php echo $row['password']; ?>" required><br><br>
    <button type="submit">Save Changes</button>
</form>