<?php

//echo"<pre>";
//print_r($_GET);
//print_r($_POST);
//echo "</pre>";  

//$user_name= $_GET['u_name'];
//$pass= $_GET['u_pass'];

//echo "$user_name $password";


$target_path = "uploads/"; //Location for uploadind files

$target_path = $target_path.basename( $_FILES['fileToUpload']['name']);

if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) {

echo "File uploaded successfully!";

} else{

echo "Sorry, file not uploaded, please try again!";

}
?>