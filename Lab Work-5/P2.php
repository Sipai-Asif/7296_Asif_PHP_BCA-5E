<form action="" method="POST">
    <input type="text" name="arr[]">
    <input type="text" name="arr[]">
    <input type="text" name="arr[]">
    <button type="submit">Submit</button>
</form>

<?php
if ($_POST) {
    foreach ($_POST['arr'] as $val) {
        echo $val . "<br>";
    }
}
?>