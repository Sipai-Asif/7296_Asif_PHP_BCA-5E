<form method="POST">
    <input type="text" name="data" value="Apple, Banana, Mango">
    <input type="submit" value="Print Array">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['data'])) {
    
    $arr = explode(",", $_POST['data']);
    
    foreach ($arr as $val) {
        echo trim($val) . "<br>";
    }
}
?>