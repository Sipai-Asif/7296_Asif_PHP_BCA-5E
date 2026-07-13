<form method="POST">
    <input type="text" name="data" value="10, 20, 30, 40">
    <input type="submit" value="Reverse">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['data'])) {
    $arr = explode(",", $_POST['data']);
    
   
    $reversed = array_reverse($arr);
    
    echo "<pre>";
    print_r($reversed);
    echo "</pre>";
}
?>