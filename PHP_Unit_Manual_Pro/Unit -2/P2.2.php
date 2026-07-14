<form method="POST">
    <input type="text" name="data" value="50, 10, 40, 20, 30">
    <input type="submit" value="Sort Array">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['data'])) {
    $arr = explode(",", $_POST['data']);
    
    sort($arr); 
    
    echo "Sorted Array: " . implode(", ", $arr);
}
?>