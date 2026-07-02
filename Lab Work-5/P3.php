<form action="" method="POST">
    <input type="text" name="arr[]">
    <input type="text" name="arr[]">
    <input type="text" name="arr[]">
    <button type="submit">Reverse</button>
</form>

<?php
if ($_POST) {
    // array_reverse() function se array ko ulta kiya
    $reversed = array_reverse($_POST['arr']);

    foreach ($reversed as $val) {
        echo $val . "<br>";
    }
}
?>0