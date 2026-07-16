<?php

//echo"<pre>";
//print_r($_POST);
//echo "</pre>";

//$user = $POST['user'];
//$pass = $POST['pass'];

if($user == "Admin" && $pass == "as") {
    //echo "welcome";
    header("location:dashboard.php");    
} else {
    echo "wrong username or password";
}
?>

