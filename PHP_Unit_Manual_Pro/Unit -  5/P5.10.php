<?php
$page = isset($_GET['page']) ? $_GET['page'] : '';

if ($page == 'blog') {
    echo "<h3>Blog Posts</h3><p>Welcome to our tech blogs updates page.</p>";
} elseif ($page == 'products') {
    echo "<h3>Our Products</h3><p>Explore our exclusive collection of tools.</p>";
} else {
    echo "<h3>Home</h3><p>Welcome to the dashboard homepage.</p>";
}
?>